<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($category1 = null, $category2 = null, $category3 = null)
    {
        $category = null;
        if ($category3) {
            $category = Category::find($category3);
        } else if ($category2) {
            $category = Category::find($category2);
        } else if ($category1) {
            $category = Category::find($category1);
        }

        $query = Product::query();

        if (!empty($category)) {
            $query->where(function ($q) use ($category) {
                $q->where('category_id', $category->id)
                    ->orWhereHas('category.category', function ($q2) use ($category) {
                        $q2->where('id', $category->id);
                    })
                    ->orWhereHas('category.category.category', function ($q2) use ($category) {
                        $q2->where('id', $category->id);
                    });
            });
        }

        $products = $query->latest()->paginate(12);

        return view('web.screens.product.index', compact('category', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
