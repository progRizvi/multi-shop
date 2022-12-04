<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    public function singleView($slug)
    {
        $product = Product::find($slug);
        dd($product);
    }
}