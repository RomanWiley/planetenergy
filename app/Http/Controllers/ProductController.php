<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Product $product)
    {
        $this->authorize('create', $product);
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = Product::create(request()->validate([
            'product_category' => 'required',
            'product_name' => 'required',
            'price' => 'required',
            'user_id' => 'required',
            'product_image' => 'required']));
            if (isset($request['product_image'])) {
                $product->addMediaFromRequest('product_image')->toMediaCollection('product_images');
            }
            return redirect('/webshop');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        // $this->authorize('update', $product);
        return view('products.show', compact('product'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $this->authorize('update', $product);
        return view('products.edit', compact('product'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $this->authorize('update', $product);
        $product->update(request()->validate([
            'product_category' => 'required',
            'product_name' => 'required',
            'price' => 'required',
            'user_id' => 'required',
            'product_image' => 'required'
        ]));
        if (isset($request['product_image'])) {
            $product->addMediaFromRequest('product_image')->toMediaCollection('product_images');
        }
        return redirect('/webshop');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $this->authorize('update', $product);
        $product->delete();
        return redirect('/webshop');
    }
}
