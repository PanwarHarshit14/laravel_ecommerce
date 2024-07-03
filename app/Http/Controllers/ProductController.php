<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\HsnCode;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Product::query();
        if (!empty($request->search)) {
            $query->where('name', 'LIKE', '%'. $request->search .'%');
        }
        $products = $query->latest()->paginate(10);
        return view('admin.screens.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        request()->flush(); 
        $categories = Category::orderBy('name')->pluck('name', 'id');
        $hsnCodes = HsnCode::orderBy('code')->pluck('code', 'id');
       return view('admin.screens.product.create',compact('categories','hsnCodes'));  
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->hsn_code_id = $request->hsn_code_id;
        $product->category_id = $request->category_id;
        $product->image = $request->image->store("products", "public");
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
        request()->replace($product->toArray());
        request()->flash();
        $categories = Category::orderBy('name')->pluck('name', 'id');
        $hsnCodes = HsnCode::orderBy('code')->pluck('code', 'id');
        return view('admin.screens.product.edit',compact('product','categories','hsnCodes')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $product->name = $request->name;
        $product->hsn_code_id = $request->hsn_code_id;
        $product->category_id = $request->category_id;
        if(!empty($request->hasFile('image'))){
            if(!empty($product->image) && file_exists(public_path() . "/storage/" . $product->getRawOriginal('image'))){
                unlink(public_path() . "/storage/" . $product->getRawOriginal('image'));
            }
            $product->image = $request->image->store("products","public");
        }
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
        if(!empty($product->image)){
            // Remove from the folder
            unlink(public_path() ."/storage/". $product->getRawOriginal('image'));
        }
         $product->delete();

        return redirect()->back()->with('success', 'Success! A record has been deleted.');
    }

    public function bulkDelete(Request $request)
    {
        foreach ($request->delIds as $id) {
            $product = Product::find($id);
            $file = unlink(public_path() ."/storage/". $product->getRawOriginal('image'));
            if(!empty($product->image && file_exists($file))){
                unlink($file);
            }
            $product->delete();
        }

        return redirect()->back()->with('success', 'Success! Selected record(s) has been deleted.');
    }
}
