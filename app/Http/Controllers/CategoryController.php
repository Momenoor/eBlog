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
        $categorys = Category::all();
        return view('category.index', compact('categorys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoriesStoreRequest $request)
    {
        try {
            Category::create($request->all());
            return redirect()->route('category.index');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['message' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $categories)
    {
        return view('category.view');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $categories)
    {
        return view('category.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoriesUpdateRequest $request, Category $categories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $categories)
    {
        //
    }
}
