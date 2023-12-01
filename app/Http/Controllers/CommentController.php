<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Requests\CommentsUpdateRequest;
use App\Http\Requests\CommentsStoreRequest;
use App\Models\Article;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::all();
        $articles = Article::all();
        return view('comment.index', compact('comments', 'articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $articles = Article::all();
        return view('comment.create', compact('articles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CommentsStoreRequest $request)
    {
        try {
            Comment::create($request->all());
            return redirect()->route('comment.index');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['message' => $e->getMessage()]);
        }
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
