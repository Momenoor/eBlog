<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleStoreRequest;
use App\Http\Requests\ArticleUpdateRequest;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all()->pluck('name')->implode(',');
        return view('article.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleStoreRequest $request)
    {

        try {
            Article::create($request->all());
            return redirect()->route('article.index');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['message' => $e->getMessage()]);
        }
    }

    protected function uploadImage($image)
    {
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path('images'), $imageName);
        return $imageName;
    }
    //$article->tags()->attach($request->input('tags'));

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
