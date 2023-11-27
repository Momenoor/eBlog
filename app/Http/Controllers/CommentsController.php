<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Http\Request;
use App\Http\Requests\CommentsUpdateRequest;
use App\Http\Requests\CommentsStoreRequest;
class CommentsController extends Controller
{
    public function index()
    {
        return view('comment.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comment.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CommentsStoreRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Comments $comments)
    {
        return view('comment.view');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comments $comments)
    {
        return view('comment.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CommentsStoreRequest $request, Comments $comments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comments $comments)
    {
        //
    }
}
