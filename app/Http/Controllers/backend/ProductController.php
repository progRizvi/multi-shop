<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list(){
        $products = Product::all();
        return view("backend.pages.products.products", compact('products'));
    }
    public function create(){
        return view("backend.pages.products.create");
    }
    public function store(Request $req){
        Product::create([
            "product_name" => $req->product_name,
            "in_stock" => $req->in_stock,
            "seller_name" => $req->seller_name,
            "product_price" => $req->product_price,
            "description" => $req->description
        ]);
        return redirect()->route("products");
    }

    public function singleOne($id){
        return $id;
    }

    public function destroy($id){
        $product = Product::find($id);
        $product->delete();

        return redirect()->back();
    }
}
