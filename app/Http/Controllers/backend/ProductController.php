<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list(){
        $products = Product::all();
        return view("backend.pages.products.products", compact('products'));
    }
    public function create(){
        $categories = Category::all();
        return view("backend.pages.products.create", compact("categories"));
    }
    public function store(Request $req){
        // dd($req->all());
        $req->validate([
            "product_name" => "required",
            "in_stock" => "required",
            "seller_name" => "required",
            "product_price" => "required",
            "product_img" => "mimes:jpeg,jpg,webp,png,gif"

        ]);
        $imgName = null;
        if($req->hasFile("product_img")){
            $imgName = date("Ymdhis")."." .$req->file("product_img")->getClientOriginalExtension();
            $req->file("product_img")->storeAs("/uploads/",$imgName);
        }

        Product::create([
            "product_name" => $req->product_name,
            "category_id" => $req->category_id,
            "in_stock" => $req->in_stock,
            "seller_name" => $req->seller_name,
            "product_img" => $imgName,
            "product_price" => $req->product_price,
            "description" => $req->description
        ]);
        return redirect()->route("products")->with("message","Product Created Successfully");
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