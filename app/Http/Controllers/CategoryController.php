<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController
{ 
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Category::query();
        if (!empty($request->search)) {
            $query->where('name', 'LIKE', '%' . $request->search . '%');
        }
        $categories = $query->latest()->paginate(10);
        return view('admin.screens.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::orderBy('name')->pluck('name', 'id');
        return view('admin.screens.category.create', compact('categories')); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->image = $request->image;
        $category->category_id = $request->category_id;
        $category->save();

        return redirect(route('admin.category.index'))->with('success', 'Success! A new record has been added.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        request()->replace($category->toArray());
        request()->flash();
        $categories = Category::orderBy('name')->pluck('name', 'id');
        return view('admin.screens.category.edit', compact('category','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $category->name = $request->name;
        $category->description = $request->description;
        $category->image = $request->image;
        $category->category_id = $request->category_id;
        $category->save();

        return redirect(route('admin.category.index'))->with('success', 'Success! A record has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->back()->with('success', 'Success! A record has been deleted.');
    }

    public function bulkDelete(Request $request)
    {
        foreach ($request->delIds as $id) {
            $category = Category::find($id);
            $category->delete();
        }

        return redirect()->back()->with('success', 'Success! Selected record(s) has been deleted.');
    }
}
