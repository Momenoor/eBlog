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
    public function store(CommentsStoreRequest $request, Article $article)
    {
        $comment = $article->comments()->create($request->all());

        if (request()->wantsTurboStream()) {
            return turbo_stream()->target('commentsList')
                ->action('append')->view('comment._turbo', ['comment' => $comment]);;
        }

        return back();
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
    public function edit(Comment $comment)
    {
        $articles = Article::all();
        return view('comment.edit', compact('comment', 'articles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CommentsStoreRequest $request, Comment $comment)
    {
        try {
            $comment->fill($request->all());
            $comment->save();
            return redirect()->route('comment.index');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['message' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect()->route('comment.index');
    }
}
