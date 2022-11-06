<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Discount;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    public function list(){
        $discounts = Discount::all();
        return view("backend.pages.discounts.discounts", compact("discounts"));
    }
    public function create(){
        return view("backend.pages.discounts.create");
    }
    public function store(Request $req){


        Discount::create([
            "product_name" => $req->product_name,
            "product_id" => $req->product_id,
            "product_price" => $req->product_price,
            "product_discount" => $req->product_discount
        ]);
        return redirect()->route("discount");
    }
    public function destroy($id){
        $discount = Discount::find($id);
        $discount->delete();

        return redirect()->back();
    }
    public function edit($id){
        $discount = Discount::find($id);

        return view("backend.pages.discounts.edit",compact("discount"));
    }
    public function update(Request $req, $id){
        $discount = Discount::find($id);
        $discount->product_discount = $req->product_discount;
        $discount->update();

        return redirect()->route("discount");
    }

}