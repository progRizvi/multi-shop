<?php

namespace App\Http\Controllers;

class ShopController extends Controller
{
    public function shop()
    {
        return view("frontend.pages.shop.shop");
    }
}