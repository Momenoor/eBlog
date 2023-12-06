<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Requests\TagsStoreRequest;
use App\Http\Requests\TagsUpdateRequest;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tags = Tag::all();
        return view('tag.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tag.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TagsStoreRequest $request)
    {

        $tags = Tag::create($request->all());
        if (request()->wantsTurboStream()) {
            return turbo_stream()->target('commentsList')
                ->action('append')->view('tag._turbo', ['tags' => $tags]);
        }
        return back();
    }

    public function show(Tag $tag)
    {
        return view('tag.view');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        return view('tag.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TagsUpdateRequest $request, Tag $tag)
    {
        try {
            $tag->fill($request->all());
            $tag->save();
            return redirect()->route('tag.index');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['message' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect()->route('tag.index');
    }
}
