<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::latest()->paginate(10);
        return view('admin.screens.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('admin.screens.product.create');  
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        // $product->hscode_id = $request->hscode_id;
        // $product->category_id = $request->category_id;
        $product->image = $request->image;
        $product->reg_price = $request->reg_price;
        $product->trade_price = $request->trade_price;
        $product->discount = $request->discount;
        $product->save();

        return redirect(route('admin.product.index'))->with('success', 'Success! A new record has been added.');

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
        return view('admin.screens.product.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $product->name = $request->name;
        // $product->hscode_id = $request->hscode_id;
        // $product->category_id = $request->category_id;
        $product->image = $request->image;
        $product->reg_price = $request->reg_price;
        $product->trade_price = $request->trade_price;
        $product->discount = $request->discount;
        $product->save();

        return redirect(route('admin.product.index'))->with('success', 'Success! A record has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
