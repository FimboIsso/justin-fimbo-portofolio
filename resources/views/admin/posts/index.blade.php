@extends('admin.layouts.app')

@section('content')
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-semibold">Articles</h1>
        <a href="{{ route('admin.posts.create') }}" class="btn-modern">Nouvel article</a>
    </div>

    <div class="bg-white rounded-lg shadow overflow-hidden">
        <table class="w-full text-sm">
            <thead class="bg-gray-100 text-gray-700">
                <tr>
                    <th class="text-left px-4 py-3">Titre</th>
                    <th class="text-left px-4 py-3">Slug</th>
                    <th class="px-4 py-3">Vedette</th>
                    <th class="px-4 py-3">Publié le</th>
                    <th class="px-4 py-3 text-right">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($posts as $p)
                    <tr class="border-t">
                        <td class="px-4 py-3">{{ $p['title'] }}</td>
                        <td class="px-4 py-3 text-xs text-gray-500">{{ $p['slug'] }}</td>
                        <td class="px-4 py-3 text-center">{{ !empty($p['featured']) ? 'Oui' : 'Non' }}</td>
                        <td class="px-4 py-3 text-center">{{ $p['published_at'] ?? '' }}</td>
                        <td class="px-4 py-3">
                            <div class="flex justify-end gap-3">
                                <a href="{{ route('blog.show', $p['slug']) }}" target="_blank"
                                    class="text-blue-600">Voir</a>
                                <a href="{{ route('admin.posts.edit', $p['id']) }}"
                                    class="text-gray-700 hover:text-blue-600">Éditer</a>
                                <form action="{{ route('admin.posts.destroy', $p['id']) }}" method="POST"
                                    onsubmit="return confirm('Supprimer cet article ?')">
                                    @csrf @method('DELETE')
                                    <button class="text-red-600 hover:underline">Supprimer</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-4 py-6 text-center text-gray-500">Aucun article pour l’instant.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
