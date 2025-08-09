@extends('admin.layouts.app')

@section('content')
    <h1 class="text-2xl font-semibold mb-6">Nouvel article</h1>

    <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data"
        class="grid md:grid-cols-3 gap-6">
        @csrf
        <div class="md:col-span-2 space-y-4">
            <!-- Assistant IA -->
            <div class="bg-white rounded border p-4">
                <div class="flex items-center justify-between mb-3">
                    <h2 class="font-semibold">Assistant IA</h2>
                    <div class="flex gap-2">
                        <button type="button" id="ai-seo"
                            class="px-3 py-1.5 rounded bg-purple-600 text-white text-sm hover:bg-purple-700">SEO</button>
                        <button type="button" id="ai-generate"
                            class="px-3 py-1.5 rounded bg-blue-600 text-white text-sm hover:bg-blue-700">Générer</button>
                    </div>
                </div>
                <p class="text-sm text-gray-600 mb-2">Décrivez brièvement le sujet de l'article (FR ou EN)</p>
                <textarea id="ai-brief" rows="3" class="w-full border rounded px-3 py-2"
                    placeholder="Ex: Offline-first ERP for agriculture with Laravel & Flutter ..."></textarea>
                <div id="ai-status" class="hidden mt-2 text-sm text-gray-600">Génération en cours...</div>
            </div>

            <div>
                <label class="block text-sm mb-1">Titre (FR)</label>
                <input name="title" class="w-full border rounded px-3 py-2" required>
            </div>
            <div>
                <label class="block text-sm mb-1">Titre (EN)</label>
                <input name="title_en" class="w-full border rounded px-3 py-2">
            </div>
            <div>
                <label class="block text-sm mb-1">Extrait (FR)</label>
                <textarea name="excerpt" rows="2" class="w-full border rounded px-3 py-2"></textarea>
            </div>
            <div>
                <label class="block text-sm mb-1">Extrait (EN)</label>
                <textarea name="excerpt_en" rows="2" class="w-full border rounded px-3 py-2"></textarea>
            </div>
            <div>
                <label class="block text-sm mb-1">Contenu (FR)</label>
                <input id="content" type="hidden" name="content">
                <trix-editor input="content" class="bg-white border rounded"></trix-editor>
            </div>
            <div>
                <label class="block text-sm mb-1">Contenu (EN)</label>
                <input id="content_en" type="hidden" name="content_en">
                <trix-editor input="content_en" class="bg-white border rounded"></trix-editor>
            </div>
        </div>
        <div class="space-y-4">
            <div>
                <label class="block text-sm mb-1">Image</label>
                <input type="file" name="image" accept="image/*" class="w-full border rounded px-3 py-2">
            </div>
            <div>
                <label class="block text-sm mb-1">Tags (séparés par des virgules)</label>
                <input name="tags" class="w-full border rounded px-3 py-2" placeholder="ERP, Laravel, Afrique">
            </div>
            <div class="flex items-center gap-2">
                <input type="checkbox" name="featured" value="1" id="featured">
                <label for="featured" class="text-sm">Mettre en vedette</label>
            </div>
            <div>
                <label class="block text-sm mb-1">Date de publication</label>
                <input type="date" name="published_at" class="w-full border rounded px-3 py-2"
                    value="{{ date('Y-m-d') }}">
            </div>
            <div>
                <label class="block text-sm mb-1">Temps de lecture (min)</label>
                <input type="number" name="reading_time" min="1" max="60"
                    class="w-full border rounded px-3 py-2" placeholder="Calcul auto si vide">
            </div>
            <div class="flex gap-3">
                <button class="btn-modern">Publier</button>
                <a href="{{ route('admin.posts.index') }}" class="px-4 py-2 rounded border">Annuler</a>
            </div>
        </div>
    </form>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const btn = document.getElementById('ai-generate');
            const btnSEO = document.getElementById('ai-seo');
            const brief = document.getElementById('ai-brief');
            const status = document.getElementById('ai-status');
            const titleFr = document.querySelector('input[name="title"]');
            const titleEn = document.querySelector('input[name="title_en"]');
            const excerptFr = document.querySelector('textarea[name="excerpt"]');
            const excerptEn = document.querySelector('textarea[name="excerpt_en"]');
            const contentFrInput = document.getElementById('content');
            const contentEnInput = document.getElementById('content_en');

            btn?.addEventListener('click', async () => {
                if (!brief.value.trim()) {
                    brief.focus();
                    return;
                }
                status.classList.remove('hidden');
                try {
                    const res = await fetch('{{ route('admin.ai.generate') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                            'X-Requested-With': 'XMLHttpRequest',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        credentials: 'same-origin',
                        body: JSON.stringify({
                            brief: brief.value
                        })
                    });
                    const ct = res.headers.get('content-type') || '';
                    if (!res.ok) {
                        const msg = ct.includes('application/json') ? JSON.stringify(await res.json()) :
                            await res.text();
                        throw new Error(msg || ('HTTP ' + res.status));
                    }
                    const json = ct.includes('application/json') ? await res.json() : {
                        success: false
                    };
                    status.classList.add('hidden');
                    if (json.success) {
                        const d = json.data;
                        titleFr.value = d.title_fr || titleFr.value;
                        titleEn.value = d.title_en || titleEn.value;
                        excerptFr.value = d.excerpt_fr || excerptFr.value;
                        excerptEn.value = d.excerpt_en || excerptEn.value;
                        contentFrInput.value = d.content_fr || contentFrInput.value;
                        contentEnInput.value = d.content_en || contentEnInput.value;
                        // Update Trix editors display
                        document.querySelector('trix-editor[input="content"]').editor.loadHTML(
                            contentFrInput.value);
                        document.querySelector('trix-editor[input="content_en"]').editor.loadHTML(
                            contentEnInput.value);
                        const tagsInput = document.querySelector('input[name="tags"]');
                        if (Array.isArray(d.tags) && tagsInput) {
                            tagsInput.value = d.tags.join(', ');
                        }
                    }
                } catch (e) {
                    status.classList.add('hidden');
                    console.error(e);
                    alert('Erreur IA: ' + (e.message || e));
                }
            });
        });
        document.addEventListener('DOMContentLoaded', () => {
            const status = document.getElementById('ai-status');
            const titleFr = document.querySelector('input[name="title"]');
            const titleEn = document.querySelector('input[name="title_en"]');
            const excerptFr = document.querySelector('textarea[name="excerpt"]');
            const excerptEn = document.querySelector('textarea[name="excerpt_en"]');
            const btnSEO = document.getElementById('ai-seo');
            btnSEO?.addEventListener('click', async () => {
                status.classList.remove('hidden');
                try {
                    const res = await fetch('{{ route('admin.ai.seo') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                            'X-Requested-With': 'XMLHttpRequest',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        credentials: 'same-origin',
                        body: JSON.stringify({
                            title_fr: titleFr.value,
                            title_en: titleEn.value,
                            excerpt_fr: excerptFr.value,
                            excerpt_en: excerptEn.value,
                        })
                    });
                    const ct = res.headers.get('content-type') || '';
                    if (!res.ok) {
                        const msg = ct.includes('application/json') ? JSON.stringify(await res.json()) :
                            await res.text();
                        throw new Error(msg || ('HTTP ' + res.status));
                    }
                    const json = ct.includes('application/json') ? await res.json() : {
                        success: false
                    };
                    status.classList.add('hidden');
                    if (json.success) {
                        const d = json.data;
                        alert(
                            `SEO FR: ${d.seo_title_fr}\n${d.seo_description_fr}\n\nSEO EN: ${d.seo_title_en}\n${d.seo_description_en}`
                        );
                    }
                } catch (e) {
                    status.classList.add('hidden');
                    console.error(e);
                    alert('Erreur SEO IA: ' + (e.message || e));
                }
            });
        });
    </script>
@endsection
