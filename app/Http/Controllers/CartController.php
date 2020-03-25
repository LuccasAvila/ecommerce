<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class CartController extends Controller
{
    public function index() {
        $cart = [];
        if(session()->has('cart')) {
            foreach(session()->get('cart') as $product) {
                $item = Product::find($product['id']);
                $item['amount'] = $product['amount'];
                array_push($cart, $item);
            }
        }

        return view('store.cart', compact('cart'));
    }

    public function add(Request $request) {
        $product = $request->get('product');

        if(session()->has('cart')) {
            session()->push('cart', $product);
        } else {
            session()->put('cart', [$product]);
        }

        return redirect()->back();
    }
}
