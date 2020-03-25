<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index() {
        return view('store.cart');
    }

    public function add(Request $request) {
        $product = $request->all();

        if(session()->has('cart')) {
            session()->push('cart', $product);
        } else {
            session()->put('cart', [$product]);
        }

        return redirect()->back();
    }
}
