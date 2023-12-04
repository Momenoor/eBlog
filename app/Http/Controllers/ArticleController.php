<?php

namespace App\Http\Controllers;

use App\Jobs\UploadImageJob;
use App\Models\Article;
use App\Models\Category;
use App\Models\Media;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleStoreRequest;
use App\Http\Requests\ArticleUpdateRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('article.index', compact('articles'));
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
        return view('article.view', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $articles)
    {
        return view('article.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArticleUpdateRequest $request, Article $articles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $articles)
    {
        //
    }
}
