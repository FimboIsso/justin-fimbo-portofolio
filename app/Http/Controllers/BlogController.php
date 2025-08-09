<?php

namespace App\Http\Controllers;

use App\Repositories\PostRepository;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function __construct(protected PostRepository $repo) {}

    /**
     * Display blog posts
     */
    public function index()
    {
        $articles = $this->repo->all();
        return view('blog.index', compact('articles'));
    }

    /**
     * Display a specific blog post
     */
    public function show($slug)
    {
        $article = $this->repo->findBySlug($slug);
        abort_if(!$article, 404);
        [$prev, $next] = $this->repo->neighboursBySlug($slug);
        $related = $this->repo->relatedByTags($article, 3);
        return view('blog.show', compact('article', 'prev', 'next', 'related'));
    }
}
