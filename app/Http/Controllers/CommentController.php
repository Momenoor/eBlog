<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Requests\CommentsUpdateRequest;
use App\Http\Requests\CommentsStoreRequest;

class CommentController extends Controller
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
    public function show(Comment $comments)
    {
        return view('comment.view');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comments)
    {
        return view('comment.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CommentsStoreRequest $request, Comment $comments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comments)
    {
        //
    }
}
