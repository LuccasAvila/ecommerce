<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class CartController extends Controller
{
    public function index() {
        $cart = [];
        if(session()->has('cart')) {
            $cart = session()->get('cart');
        }

        return view('store.cart', compact('cart'));
    }

    public function add(Request $request) {
        $data = $request->get('product');
        $product = Product::whereSlug($data['slug'])->first();
        if(!$product || $data['amount'] <= 0)
            return redirect()->back();
        $product['amount'] = $data['amount'];

        if(session()->has('cart')) {
            session()->push('cart', $product);
        } else {
            session()->put('cart', [$product]);
        }

        return redirect()->back();
    }


public function remove($slug) {
        if(session()->has('cart')) {
            $cart = session()->get('cart');
            $cart = array_filter($cart, function($item) use($slug) {
                return $item->slug !== $slug;
            });
            session()->put('cart', $cart);
        }

        return redirect()->route('cart.index');
    }
}
