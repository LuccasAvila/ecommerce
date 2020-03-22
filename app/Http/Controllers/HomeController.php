<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class HomeController extends Controller
{
    public function index() {
        $categories = new Category();
        $categories = $categories->limit(7)->orderBy('id', 'DESC')->get();
        return view('store.home', compact('categories'));
    }

    public function show($slug) {
        return view('store.product');
    }
}
