<?php

namespace App\Http\Controllers;

use App\Shop;
use App\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    

    public function cart()
    {
        return view ('shop.cart');
    }

    public function addproduct()
    {
        return view ('shop.addproduct');
    }
}
