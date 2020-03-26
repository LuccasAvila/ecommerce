<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class HomeController extends Controller
{
    public function index() {
        $categories = new Category();
        $categories = $categories->limit(7)->orderBy('id', 'DESC')->get();

        $product = new Product();
        $newProducts = $product->where('visible', 1)->limit(4)->orderBy('id', 'DESC')->get();
        $featuredProducts = $product->where('featured', 1)->limit(4)->orderBy('id', 'DESC')->get();

        return view('store.home', compact('categories', 'newProducts', 'featuredProducts'));
    }

    public function show($slug) {
        $product = Product::where('slug', $slug)->first();
        return view('store.product', compact('product'));
    }
}
