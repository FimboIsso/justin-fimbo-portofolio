<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class AIContentService
{
    public function generateFromBrief(string $brief, array $options = []): array
    {
        $model = env('OPENAI_MODEL', 'gpt-4o-mini');
        $apiKey = env('OPENAI_API_KEY');

        $system = 'You are a senior technical copywriter for a software engineer/CTO portfolio blog. '
            . 'Write concise, high-signal, modern, developer-grade content. Output MUST be strict JSON with keys: '
            . 'title_fr, title_en, excerpt_fr, excerpt_en, content_fr, content_en, tags (array of lowercase). '
            . 'French texts should be native-level and concise. English texts should be concise and natural.';

        $user = 'Brief:\n"' . trim($brief) . '"\n'
            . 'Constraints: 1) Title <= 80 chars. 2) Excerpt 20-35 words. 3) Content: 5-8 short paragraphs with headings, lists allowed. '
            . '4) Tags: 3-6 short tags, lowercase, no #. 5) Avoid marketing fluff, keep it technical and practical.';

        if ($apiKey) {
            $response = Http::withToken($apiKey)
                ->timeout(30)
                ->post('https://api.openai.com/v1/chat/completions', [
                    'model' => $model,
                    'messages' => [
                        ['role' => 'system', 'content' => $system],
                        ['role' => 'user', 'content' => $user],
                    ],
                    'temperature' => 0.5,
                    'response_format' => ['type' => 'json_object'],
                ]);

            if ($response->successful()) {
                $content = $response->json('choices.0.message.content');
                $data = json_decode($content, true);
                if (is_array($data)) {
                    return $this->normalize($data);
                }
            }
        }

        // Fallback simple (sans clé API): synthèse très basique
        $excerptFr = mb_substr($brief, 0, 160);
        $excerptEn = $excerptFr;
        $contentFr = '<h2>Contexte</h2><p>' . e($brief) . '</p><h2>Points clés</h2><ul><li>Objectifs</li><li>Méthode</li><li>Résultats</li></ul>';
        $contentEn = '<h2>Context</h2><p>' . e($brief) . '</p><h2>Key points</h2><ul><li>Goals</li><li>Method</li><li>Results</li></ul>';

        return [
            'title_fr' => 'Nouvel article',
            'title_en' => 'New article',
            'excerpt_fr' => $excerptFr,
            'excerpt_en' => $excerptEn,
            'content_fr' => $contentFr,
            'content_en' => $contentEn,
            'tags' => ['blog', 'dev', 'notes'],
        ];
    }

    private function normalize(array $data): array
    {
        return [
            'title_fr' => (string)($data['title_fr'] ?? ''),
            'title_en' => (string)($data['title_en'] ?? ''),
            'excerpt_fr' => (string)($data['excerpt_fr'] ?? ''),
            'excerpt_en' => (string)($data['excerpt_en'] ?? ''),
            'content_fr' => (string)($data['content_fr'] ?? ''),
            'content_en' => (string)($data['content_en'] ?? ''),
            'tags' => array_values(array_filter(array_map('strval', $data['tags'] ?? []))),
        ];
    }

    public function generateSEO(?string $titleFr, ?string $titleEn, ?string $excerptFr, ?string $excerptEn): array
    {
        $apiKey = env('OPENAI_API_KEY');
        $model = env('OPENAI_MODEL', 'gpt-4o-mini');

        $system = 'You generate SEO metadata for blog posts. Output strict JSON with keys: '
            . 'slug, seo_title_fr, seo_title_en, seo_description_fr, seo_description_en. '
            . 'Slug: lowercase, hyphenated, ASCII, <= 80 chars. SEO titles <= 60 chars. Descriptions 140-160 chars.';

        $user = json_encode([
            'title_fr' => (string)$titleFr,
            'title_en' => (string)$titleEn,
            'excerpt_fr' => (string)$excerptFr,
            'excerpt_en' => (string)$excerptEn,
        ], JSON_UNESCAPED_UNICODE);

        if ($apiKey) {
            $response = Http::withToken($apiKey)
                ->timeout(20)
                ->post('https://api.openai.com/v1/chat/completions', [
                    'model' => $model,
                    'messages' => [
                        ['role' => 'system', 'content' => $system],
                        ['role' => 'user', 'content' => $user],
                    ],
                    'temperature' => 0.3,
                    'response_format' => ['type' => 'json_object'],
                ]);
            if ($response->successful()) {
                $content = $response->json('choices.0.message.content');
                $data = json_decode($content, true);
                if (is_array($data)) {
                    return [
                        'slug' => (string)($data['slug'] ?? ''),
                        'seo_title_fr' => (string)($data['seo_title_fr'] ?? ''),
                        'seo_title_en' => (string)($data['seo_title_en'] ?? ''),
                        'seo_description_fr' => (string)($data['seo_description_fr'] ?? ''),
                        'seo_description_en' => (string)($data['seo_description_en'] ?? ''),
                    ];
                }
            }
        }

        // Fallback
        $baseTitle = $titleFr ?: $titleEn ?: 'article';
        $slug = Str::slug(Str::limit($baseTitle, 80, ''));
        $seoTitleFr = Str::limit($titleFr ?: $baseTitle, 60, '');
        $seoTitleEn = Str::limit($titleEn ?: $baseTitle, 60, '');
        $baseDescFr = $excerptFr ?: ($excerptEn ?: $baseTitle);
        $baseDescEn = $excerptEn ?: ($excerptFr ?: $baseTitle);
        return [
            'slug' => $slug,
            'seo_title_fr' => $seoTitleFr,
            'seo_title_en' => $seoTitleEn,
            'seo_description_fr' => Str::limit($baseDescFr, 155, ''),
            'seo_description_en' => Str::limit($baseDescEn, 155, ''),
        ];
    }

    public function enhanceText(string $text, string $lang = 'fr'): string
    {
        $apiKey = env('OPENAI_API_KEY');
        $model = env('OPENAI_MODEL', 'gpt-4o-mini');
        $lang = strtolower($lang) === 'en' ? 'en' : 'fr';
        $system = $lang === 'fr'
            ? 'Améliore le texte pour plus de clarté et concision, style technique moderne. Retourne du HTML minimal (paragraphes, listes, titres).'
            : 'Improve the text for clarity and conciseness, modern technical tone. Return minimal HTML (paragraphs, lists, headings).';

        if ($apiKey) {
            $response = Http::withToken($apiKey)
                ->timeout(20)
                ->post('https://api.openai.com/v1/chat/completions', [
                    'model' => $model,
                    'messages' => [
                        ['role' => 'system', 'content' => $system],
                        ['role' => 'user', 'content' => trim($text)],
                    ],
                    'temperature' => 0.4,
                ]);
            if ($response->successful()) {
                return (string)$response->json('choices.0.message.content');
            }
        }

        // Fallback: trim and wrap
        $plain = trim(preg_replace('/\s+/', ' ', strip_tags($text)));
        return '<p>' . e($plain) . '</p>';
    }
}
