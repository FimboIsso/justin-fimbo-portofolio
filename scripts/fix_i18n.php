<?php
// Fix i18n: prefix __('...') and @lang('...') with messages. if key exists in lang/fr/messages.php

function collectBladeFiles($dir)
{
    $rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
    $files = [];
    foreach ($rii as $file) {
        if ($file->isDir()) continue;
        if (str_ends_with($file->getFilename(), '.blade.php')) {
            $files[] = $file->getPathname();
        }
    }
    return $files;
}

$base = dirname(__DIR__);
$viewsDir = $base . '/resources/views';
$langFr = $base . '/lang/fr/messages.php';

if (!file_exists($langFr)) {
    fwrite(STDERR, "messages.php FR introuvable\n");
    exit(1);
}

$messages = include $langFr; // returns array

$files = collectBladeFiles($viewsDir);
$changed = 0;

foreach ($files as $file) {
    $content = file_get_contents($file);
    $original = $content;

    // Replace __('...') when ... exists as a key in messages.php and not already namespaced
    $content = preg_replace_callback("/__\(\'([^\']+)\'\)/u", function ($m) use ($messages) {
        $key = $m[1];
        if (str_contains($key, '.')) return $m[0];
        if (array_key_exists($key, $messages)) {
            return "__\('messages." . $key . "'\)";
        }
        return $m[0];
    }, $content);

    // Replace @lang('...') similarly
    $content = preg_replace_callback("/@lang\(\'([^\']+)\'\)/u", function ($m) use ($messages) {
        $key = $m[1];
        if (str_contains($key, '.')) return $m[0];
        if (array_key_exists($key, $messages)) {
            return "@lang('messages." . $key . "')";
        }
        return $m[0];
    }, $content);

    if ($content !== $original) {
        file_put_contents($file, $content);
        $changed++;
        echo "Updated: {$file}\n";
    }
}

echo "Done. Files changed: {$changed}\n";
