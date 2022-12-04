<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ShopController extends Controller
{
    public function shop()
    {
        $products = Product::all();
        return view("frontend.pages.shop.shop", compact("products"));
    }
    public function singleView($slug)
    {
        $product = Product::where("slug", $slug)->firstOrfail();
        // dd($product);
        return view("frontend.pages.details.productDetails", compact("product"));
    }
}