<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;
use App\Http\Requests\MediaStoreRequest;
use App\Http\Requests\MediaUpdateRequest;
class MediaController extends Controller
{
    public function index()
    {
        return view('media.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('media.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MediaStoreRequest $request)
    {
        //
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
