<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CategoriesStoreRequest;
use App\Http\Requests\CategoriesUpdateRequest;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoriesStoreRequest $request): \Illuminate\Http\RedirectResponse
    {
        //try {
        //    Category::create($request->all());
        //    return redirect()->route('category.index');
        //} catch (\Exception $e) {
        //    return redirect()->back()->withErrors(['message' => $e->getMessage()]);
        //}
        $categories = Category::create($request->all());
        if (request()->wantsTurboStream()) {
            return turbo_stream()->target('commentsList')
                ->action('append')->view('category._turbo', ['categories' => $categories]);
        }
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $categories): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('category.view');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoriesUpdateRequest $request, Category $category): \Illuminate\Http\RedirectResponse
    {
        try {
            $category->fill($request->all());
            $category->save();
            return redirect()->route('category.index');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['message' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        if (!$category->articles()->exists()) {
            $category->delete();
        }
        return redirect()->route('category.index');
    }
}
