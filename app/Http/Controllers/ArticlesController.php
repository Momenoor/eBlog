<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleStoreRequest;
use App\Http\Requests\ArticleUpdateRequest;
class ArticlesController extends Controller
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


    }


    /**
     * Display the specified resource.
     */
    public function show(Articles $articles)
    {
        return view('article.view');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Articles $articles)
    {
        return view('article.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArticleUpdateRequest $request, Articles $articles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Articles $articles)
    {
        //
    }
}
