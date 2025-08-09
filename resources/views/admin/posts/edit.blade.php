@extends('admin.layouts.app')

@section('content')
    <h1 class="text-2xl font-semibold mb-6">Éditer: {{ $post['title'] }}</h1>

    <form action="{{ route('admin.posts.update', $post['id']) }}" method="POST" enctype="multipart/form-data"
        class="grid md:grid-cols-3 gap-6">
        @csrf @method('PUT')
        <div class="md:col-span-2 space-y-4">
            <div>
                <label class="block text-sm mb-1">Titre (FR)</label>
                <input name="title" class="w-full border rounded px-3 py-2" value="{{ $post['title'] }}" required>
            </div>
            <div>
                <label class="block text-sm mb-1">Titre (EN)</label>
                <input name="title_en" class="w-full border rounded px-3 py-2" value="{{ $post['title_en'] }}">
            </div>
            <div>
                <label class="block text-sm mb-1">Extrait (FR)</label>
                <textarea name="excerpt" rows="2" class="w-full border rounded px-3 py-2">{{ $post['excerpt'] }}</textarea>
            </div>
            <div>
                <label class="block text-sm mb-1">Extrait (EN)</label>
                <textarea name="excerpt_en" rows="2" class="w-full border rounded px-3 py-2">{{ $post['excerpt_en'] }}</textarea>
            </div>
            <div>
                <label class="block text-sm mb-1">Contenu (FR)</label>
                <input id="content" type="hidden" name="content" value='{{ $post['content'] }}'>
                <trix-editor input="content" class="bg-white border rounded"></trix-editor>
            </div>
            <div>
                <label class="block text-sm mb-1">Contenu (EN)</label>
                <input id="content_en" type="hidden" name="content_en" value='{{ $post['content_en'] }}'>
                <trix-editor input="content_en" class="bg-white border rounded"></trix-editor>
            </div>
        </div>
        <div class="space-y-4">
            @if (!empty($post['image']))
                <div>
                    <label class="block text-sm mb-1">Image actuelle</label>
                    <img src="/{{ $post['image'] }}" alt="{{ $post['title'] }}" class="w-full rounded">
                </div>
            @endif
            <div>
                <label class="block text-sm mb-1">Nouvelle image</label>
                <input type="file" name="image" accept="image/*" class="w-full border rounded px-3 py-2">
            </div>
            <div>
                <label class="block text-sm mb-1">Tags (séparés par des virgules)</label>
                <input name="tags" class="w-full border rounded px-3 py-2"
                    value="{{ implode(', ', $post['tags'] ?? []) }}">
            </div>
            <div class="flex items-center gap-2">
                <input type="checkbox" name="featured" value="1" id="featured"
                    {{ !empty($post['featured']) ? 'checked' : '' }}>
                <label for="featured" class="text-sm">Mettre en vedette</label>
            </div>
            <div>
                <label class="block text-sm mb-1">Date de publication</label>
                <input type="date" name="published_at" class="w-full border rounded px-3 py-2"
                    value="{{ $post['published_at'] ?? date('Y-m-d') }}">
            </div>
            <div>
                <label class="block text-sm mb-1">Temps de lecture (min)</label>
                <input type="number" name="reading_time" min="1" max="60"
                    class="w-full border rounded px-3 py-2" value="{{ $post['reading_time'] ?? '' }}">
            </div>
            <div class="flex gap-3">
                <button class="btn-modern">Enregistrer</button>
                <a href="{{ route('admin.posts.index') }}" class="px-4 py-2 rounded border">Annuler</a>
            </div>
        </div>
    </form>
@endsection
