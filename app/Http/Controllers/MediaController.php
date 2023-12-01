<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;
use App\Http\Requests\MediaStoreRequest;
use App\Http\Requests\MediaUpdateRequest;
use App\Models\Article;

class MediaController extends Controller
{
    public function index()
    {
        $media = Media::all();
        return view('media.index', compact('media'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $articles = Article::all();
        return view('media.create', compact('articles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MediaStoreRequest $request)
    {
        try {
            Media::create($request->all());
            return redirect()->route('media.index');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['message' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Media $media)
    {
        return view('media.view');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Media $media)
    {
        return view('media.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MediaUpdateRequest $request, Media $media)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Media $media)
    {
        //
    }
}
