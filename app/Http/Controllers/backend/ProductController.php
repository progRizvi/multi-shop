<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function list() {

        $products = null;
        if (auth()->user()->role === "admin") {
            $products = Product::all();
        } else {
            $products = Product::where("user_id", auth()->user()->id)->get();
        }
        return view("backend.pages.products.products", compact('products'));
    }
    public function create()
    {
        $categories = Category::all();
        return view("backend.pages.products.create", compact("categories"));
    }
    public function store(Request $req)
    {

        $req->validate([
            "product_name" => "required",
            "in_stock" => "required",
            "product_price" => "required",

        ]);
        $imgName = [];
        if ($req->hasFile("product_img")) {
            foreach ($req->file("product_img") as $value) {
                $randName = md5(rand(100, 1000)) . "." . $value->getClientOriginalExtension();
                $value->move(public_path("/uploads/"), $randName);
                $imgName[] = $randName;
            }
        }
        // dd($imgName);
        $slug = $req->product_name . "-" . date("his");

        $result = str_replace(" ", "-", $slug);
        $result = strtolower(str_replace("'", "", $result));
        Product::create([
            "product_name" => $req->product_name,
            "category_id" => $req->category_id,
            "user_id" => auth()->user()->id,
            "slug" => $result,
            "in_stock" => $req->in_stock,
            "product_img" => $imgName,
            "product_price" => $req->product_price,
            "description" => $req->description,
        ]);
        return redirect()->route("products")->with("message", "Product Created Successfully");
    }

    public function singleView($id)
    {

        $product = Product::find($id);

        return view("backend.pages.products.singleView", compact("product"));

    }
    public function edit($id)
    {
        return $id;
    }
    public function update($id)
    {
        return $id;
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect()->back();
    }
}