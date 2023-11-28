<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleStoreRequest;
use App\Http\Requests\ArticleUpdateRequest;

class ArticleController extends Controller
{
    public function index()
    {
        return view('article.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleStoreRequest $request)
    {
        try {
            $article = new Article();
            $article->title = $request->title;
            $article->slug = $request->slug;
            $article->body = $request->body;
            $article->status = $request->status;
            $article->is_pinned = $request->is_pinned;
            $article->hero_image_id = $request->hero_image_id;
            $article->save();
            return redirect()->route('article.index');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(Article $articles)
    {
        return view('article.view');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $articles)
    {
        return view('article.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArticleUpdateRequest $request, Article $articles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $articles)
    {
        //
    }
}
