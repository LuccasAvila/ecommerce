<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Category;
use App\Product;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->paginate('5');
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all(['id', 'name']);
        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\ProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $data = $request->all();
        $product = Product::create($data);
        $product->categories()->sync($data['categories']);

        if($request->hasFile('files')) {
            $images = $this->uploadPhoto($request->file('files'), 'image');
            $product->photos()->createMany($images);
        }

        return redirect()->route('admin.products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all(['id', 'name']);
        return view('admin.products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\ProductRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        $data = $request->all();
        $product = Product::find($id);
        $product->update($data);
        $product->categories()->sync($data['categories']);

        if($request->hasFile('files')) {
            $images = $this->uploadPhoto($request->file('files'), 'image');
            $product->photos()->createMany($images);
        }

        return redirect()->route('admin.products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect()->back();
    }

    public function visibility($id) {
        $product = Product::find($id);
        $product->visible = !$product->visible;
        $product->save();
        return redirect()->back();
    }

    public function featured($id) {
        $product = Product::find($id);
        $product->featured = !$product->featured;
        $product->save();
        return redirect()->back();
    }

    protected function uploadPhoto($images, $column) {
        $uploadedPhotos = [];

        foreach($images as $image) {
            $uploadedPhotos[] = [$column => $image->store('products', 'public')];
        }

        return $uploadedPhotos;
    }
}
