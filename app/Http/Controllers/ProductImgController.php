<?php

namespace App\Http\Controllers;

use App\Models\ProductImg;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductImgController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productImgs = ProductImg::latest()->paginate(10);
        return view('admin.screens.productimg.index', compact('productImgs')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        request()->flush();
        $products = Product::orderBy('name')->pluck('name', 'id');
        return view('admin.screens.productimg.create',compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $productImg = new ProductImg();
        $productImg->image = $request->image;
        $productImg->product_id = $request->product_id;
        $productImg->save();

        return redirect(route('admin.productimg.index'))->with('success', 'Success! A new record has been added.');
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductImg $productImg)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductImg $productImg)
    {
        request()->replace($productImg->toArray());
        request()->flash();
        $products = Product::orderBy('name')->pluck('name', 'id'); 
        return view('admin.screens.productimg.edit', compact('productImg','products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProductImg $productImg)
    {
        $productImg->image = $request->image;
        $productImg->product_id = $request->product_id;
        $productImg->save(); 

        return redirect(route('admin.productimg.index'))->with('success', 'Success! A new record has been added.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductImg $productImg)
    {
        $productImg->delete();

        return redirect()->back()->with('success', 'Success! A record has been deleted.');
    }
}
