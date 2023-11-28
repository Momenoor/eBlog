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
        return view('tag.index');
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
        try {
            /* $tag = new Tags(); */
            /* $tag->name = $request->name; */
            /* $tag->slug = $request->slug; */
            /* $tag->description = $request->description; */


            Tag::create($request->all());
            return redirect()->route('tags.index');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
        /*Tags::create([
            'name'=>$request->name,
            'description'=>$request->description,
        ]);*/
    }

    /**
     * Display the specified resource.
     */
    public function show(Tag $tags)
    {
        return view('tag.view');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tags)
    {
        return view('tag.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TagsUpdateRequest $request, Tag $tags)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tags)
    {
        //
    }
}
