<?php

namespace App\Http\Controllers;

use App\Models\Tags;
use Illuminate\Http\Request;
use App\Http\Requests\TagsStoreRequest;
use App\Http\Requests\TagsUpdateRequest;
class TagsController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Tags $tags)
    {
        return view('tag.view');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tags $tags)
    {
        return view('tag.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TagsUpdateRequest $request, Tags $tags)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tags $tags)
    {
        //
    }
}
