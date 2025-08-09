<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\PostRepository;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct(protected PostRepository $repo) {}

    public function index()
    {
        $posts = $this->repo->all();
        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(Request $request)
    {
        $data = $this->validated($request);
        $data['image'] = $request->file('image');
        $this->repo->create($data);
        return redirect()->route('admin.posts.index')->with('success', 'Article créé.');
    }

    public function edit(int $id)
    {
        $post = $this->repo->find($id);
        abort_if(!$post, 404);
        return view('admin.posts.edit', compact('post'));
    }

    public function update(Request $request, int $id)
    {
        $post = $this->repo->find($id);
        abort_if(!$post, 404);
        $data = $this->validated($request, false);
        $data['image'] = $request->file('image');
        $this->repo->update($id, $data);
        return redirect()->route('admin.posts.index')->with('success', 'Article mis à jour.');
    }

    public function destroy(int $id)
    {
        $this->repo->delete($id);
        return redirect()->route('admin.posts.index')->with('success', 'Article supprimé.');
    }

    protected function validated(Request $request, bool $create = true): array
    {
        return $request->validate([
            'title' => 'required|string|max:200',
            'title_en' => 'nullable|string|max:200',
            'excerpt' => 'nullable|string|max:500',
            'excerpt_en' => 'nullable|string|max:500',
            'content' => 'nullable|string',
            'content_en' => 'nullable|string',
            'tags' => 'nullable|string',
            'featured' => 'nullable|boolean',
            'published_at' => 'nullable|date',
            'reading_time' => 'nullable|integer|min:1|max:60',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:3072',
        ]);
    }
}
