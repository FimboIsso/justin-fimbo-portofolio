<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\AIContentService;
use Illuminate\Http\Request;

class AIController extends Controller
{
    public function __construct(protected AIContentService $ai) {}

    public function generate(Request $request)
    {
        $request->validate([
            'brief' => 'required|string|min:10',
        ]);

        $data = $this->ai->generateFromBrief($request->input('brief'));

        return response()->json([
            'success' => true,
            'data' => $data,
        ]);
    }

    public function seo(Request $request)
    {
        $request->validate([
            'title_fr' => 'nullable|string|max:200',
            'title_en' => 'nullable|string|max:200',
            'excerpt_fr' => 'nullable|string|max:500',
            'excerpt_en' => 'nullable|string|max:500',
        ]);
        $meta = $this->ai->generateSEO(
            $request->input('title_fr'),
            $request->input('title_en'),
            $request->input('excerpt_fr'),
            $request->input('excerpt_en')
        );
        return response()->json(['success' => true, 'data' => $meta]);
    }

    public function enhance(Request $request)
    {
        $request->validate([
            'text' => 'required|string|min:5',
            'lang' => 'nullable|in:fr,en',
        ]);
        $html = $this->ai->enhanceText($request->input('text'), $request->input('lang', 'fr'));
        return response()->json(['success' => true, 'html' => $html]);
    }
}
