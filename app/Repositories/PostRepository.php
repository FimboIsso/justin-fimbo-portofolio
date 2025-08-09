<?php

namespace App\Repositories;

use Illuminate\Support\Str;

class PostRepository
{
    protected string $file;

    public function __construct()
    {
        $dir = storage_path('app/blog');
        if (!is_dir($dir)) {
            @mkdir($dir, 0775, true);
        }
        $this->file = $dir . '/posts.json';
        if (!file_exists($this->file)) {
            file_put_contents($this->file, json_encode([]));
        }
        $uploadDir = public_path('uploads/blog');
        if (!is_dir($uploadDir)) {
            @mkdir($uploadDir, 0775, true);
        }
    }

    protected function read(): array
    {
        return json_decode(file_get_contents($this->file), true) ?: [];
    }

    protected function write(array $posts): void
    {
        file_put_contents($this->file, json_encode(array_values($posts), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    }

    public function all()
    {
        $posts = collect($this->read());
        return $posts->sortByDesc('published_at')->values();
    }

    public function featured()
    {
        return $this->all()->where('featured', true);
    }

    public function find(int $id): ?array
    {
        return collect($this->read())->firstWhere('id', $id);
    }

    public function findBySlug(string $slug): ?array
    {
        return collect($this->read())->firstWhere('slug', $slug);
    }

    public function neighboursBySlug(string $slug): array
    {
        $all = $this->all()->values();
        $index = $all->search(fn($p) => ($p['slug'] ?? null) === $slug);
        if ($index === false) {
            return [null, null];
        }
        $prev = $index > 0 ? $all[$index - 1] : null;
        $next = $index < $all->count() - 1 ? $all[$index + 1] : null;
        return [$prev, $next];
    }

    public function relatedByTags(array $article, int $limit = 3)
    {
        $tags = collect($article['tags'] ?? [])
            ->map(fn($t) => mb_strtolower(trim($t)))
            ->filter()
            ->values();

        if ($tags->isEmpty()) {
            return collect([]);
        }

        return $this->all()
            ->filter(function ($p) use ($article, $tags) {
                if (($p['slug'] ?? null) === ($article['slug'] ?? null)) {
                    return false;
                }
                $ptags = collect($p['tags'] ?? [])
                    ->map(fn($t) => mb_strtolower(trim($t)))
                    ->filter();
                return $ptags->intersect($tags)->isNotEmpty();
            })
            ->take($limit)
            ->values();
    }

    public function create(array $data): array
    {
        $posts = $this->read();

        $id = (collect($posts)->max('id') ?? 0) + 1;
        $slug = Str::slug($data['title'] ?? ('post-' . $id));
        $slugBase = $slug;
        $suffix = 1;
        while ($this->findBySlug($slug)) {
            $slug = $slugBase . '-' . $suffix++;
        }

        $imagePath = null;
        if (!empty($data['image']) && is_object($data['image']) && method_exists($data['image'], 'isValid') && $data['image']->isValid()) {
            $ext = $data['image']->getClientOriginalExtension();
            $name = time() . '_' . Str::random(6) . '.' . $ext;
            $target = public_path('uploads/blog/' . $name);
            $data['image']->move(public_path('uploads/blog'), $name);
            $imagePath = 'uploads/blog/' . $name;
        }

        $record = [
            'id' => $id,
            'title' => $data['title'] ?? '',
            'title_en' => $data['title_en'] ?? '',
            'slug' => $slug,
            'excerpt' => $data['excerpt'] ?? '',
            'excerpt_en' => $data['excerpt_en'] ?? '',
            'content' => $data['content'] ?? '',
            'content_en' => $data['content_en'] ?? '',
            'image' => $imagePath ?: ($data['image_path'] ?? null),
            'author' => $data['author'] ?? 'Justin Fimbo',
            'tags' => $this->normalizeTags($data['tags'] ?? ''),
            'reading_time' => $data['reading_time'] ?? $this->estimateReadingTime(($data['content'] ?? '') . ' ' . ($data['content_en'] ?? '')),
            'featured' => !empty($data['featured']),
            'published_at' => $data['published_at'] ?? now()->toDateString(),
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];

        $posts[] = $record;
        $this->write($posts);

        return $record;
    }

    public function update(int $id, array $data): ?array
    {
        $posts = $this->read();
        foreach ($posts as &$post) {
            if ($post['id'] === $id) {
                $post['title'] = $data['title'] ?? $post['title'];
                $post['title_en'] = $data['title_en'] ?? $post['title_en'];
                $post['excerpt'] = $data['excerpt'] ?? $post['excerpt'];
                $post['excerpt_en'] = $data['excerpt_en'] ?? $post['excerpt_en'];
                $post['content'] = $data['content'] ?? $post['content'];
                $post['content_en'] = $data['content_en'] ?? $post['content_en'];
                $post['author'] = $data['author'] ?? $post['author'];
                $post['tags'] = isset($data['tags']) ? $this->normalizeTags($data['tags']) : $post['tags'];
                $post['reading_time'] = $data['reading_time'] ?? $post['reading_time'];
                $post['featured'] = isset($data['featured']) ? (bool)$data['featured'] : $post['featured'];
                $post['published_at'] = $data['published_at'] ?? $post['published_at'];

                if (!empty($data['image']) && is_object($data['image']) && method_exists($data['image'], 'isValid') && $data['image']->isValid()) {
                    $ext = $data['image']->getClientOriginalExtension();
                    $name = time() . '_' . Str::random(6) . '.' . $ext;
                    $data['image']->move(public_path('uploads/blog'), $name);
                    $post['image'] = 'uploads/blog/' . $name;
                }

                $post['updated_at'] = now()->toDateTimeString();
                $this->write($posts);
                return $post;
            }
        }
        return null;
    }

    public function delete(int $id): bool
    {
        $filtered = collect($this->read())->reject(fn($p) => $p['id'] === $id)->values()->all();
        $this->write($filtered);
        return true;
    }

    protected function estimateReadingTime(string $text): int
    {
        $words = str_word_count(strip_tags($text));
        return max(1, (int)ceil($words / 200));
    }

    protected function normalizeTags($tags): array
    {
        if (is_array($tags)) return array_values(array_filter(array_map('trim', $tags)));
        return array_values(array_filter(array_map('trim', explode(',', (string) $tags))));
    }
}
