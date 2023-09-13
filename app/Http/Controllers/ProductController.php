<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::get();
        return view('Products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Product::create([
            'product_name' => $request->product_name,
            'product_category' => $request->product_category,
            'product_weight' => $request->product_weight,
            'product_units' => $request->product_units,
            'product_image' => $request->product_image ?? '',
            'product_descriptions' => $request->product_descriptions ?? '',
            'product_stock' => $request->product_stock ? 1 : 0,
            'product_code' => $request->product_code,
            'product_sku' => $request->product_sku,
            'product_status' => $request->product_status,
            'price_regular' => $request->price_regular,
            'price_sale' => $request->price_sale,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
        ]);
        return redirect(route('products.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::find($id)->delete();

        //
    }
}
