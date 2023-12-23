<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleStoreRequest;
use App\Http\Requests\ArticleUpdateRequest;
use App\Jobs\UploadImageJob;
use App\Models\Article;
use App\Models\Category;
use App\Models\Media;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ArticleController extends Controller
{
    public function index()
    {
        $query = Article::query()->latest()->take(4)->withCount('comments');
        $articlesOne = $query->get();
        $articlesTwo = $query->skip(4)->get();
        $articlesThree = $query->skip(8)->get();
        return view('article.index', compact('articlesOne', 'articlesTwo', 'articlesThree'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('article.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     * @throws \Exception
     */
    public function store(ArticleStoreRequest $request)
    {
        DB::beginTransaction();

        try {
            // create article
            $article = Article::create($request->all());

            // get tags from request
            $tags = $request->get('tags');

            // sync tags with article
            $article->tags()->sync($tags);

            // upload image to storage and update article with image id
            if ($request->hasFile('image')) {

                $image = $request->file('image');
                $imageName = $article->id . '-' . time() . '-app.' . $image->getClientOriginalExtension();
                $size = $image->getSize();
                $image->move(public_path('images/'), $imageName);
                $media = Media::create([
                    'path' => 'images/' . $imageName,
                    'name' => $imageName,
                    'type' => $image->getClientOriginalExtension(),
                    'size' => $size,
                    'article_id' => $article->id,
                ]);

                $article->update([
                    'hero_image_id' => $media->id,
                ]);
            }
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            dd($e);
        } finally { // redirect to index
            return redirect()->route('article.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        $categories = Category::withCount('articles')->get();
        $recentArticles = Article::latest()->take(4)->get();
        $recentArticles->load(['comments', 'tags', 'heroImage']);
        $loggedInUser = Auth::user();
        $isAuthor = ($loggedInUser && $loggedInUser->id === $article->author_id);
        return view('article.view', compact('article', 'categories', 'recentArticles', 'isAuthor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('article.edit', compact('categories', 'tags', 'article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArticleUpdateRequest $request, Article $article)
    {

        DB::beginTransaction();

        try {
            $article->fill($request->all());

            // Sync tags
            $article->tags()->sync($request->input('tags', []));

            // Check if a new image is uploaded
            if ($request->hasFile('image')) {
                $oldMedia = $article->heroImage;

                // Upload the new image
                $image = $request->file('image');
                $imageName = $article->id . '-' . time() . '-app.' . $image->getClientOriginalExtension();
                $size = $image->getSize();
                $image->move(public_path('images/'), $imageName);

                // Create a new Media entry
                $media = Media::create([
                    'path' => 'images/' . $imageName,
                    'name' => $imageName,
                    'type' => $image->getClientOriginalExtension(),
                    'size' => $size,
                    'article_id' => $article->id,
                ]);

                // Update the article with the new image
                $article->update([
                    'hero_image_id' => $media->id,
                ]);

                // Delete the old image file and Media entry
                if ($oldMedia) {
                    File::delete(public_path($oldMedia->path));
                    $oldMedia->delete();
                }
            }

            $article->save();

            DB::commit();

            return redirect()->route('article.index');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['message' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        if (!$article->article()->exists()) {
            $article->delete();
        }
        return redirect()->route('article.index');
    }
}
