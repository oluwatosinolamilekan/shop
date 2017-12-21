<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Session;   
use Illuminate\Http\Request;

class CartController extends Controller
{
    //

    public function cart()
    {
        return view('shoppingcart.cart');
    }

    public function addcart(Product $product )
    {
        // $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->$id);

        $request->session()->put('cart',$cart);
        dd($request->Session()->get('cart'));
        // return redirect()->route('shop.index');
    }

    public function addproduct()
    {
        return view('product.addproduct');
    }

}
