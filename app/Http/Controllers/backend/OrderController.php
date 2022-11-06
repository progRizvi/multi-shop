<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function list(){

        $orders = Order::all();
        return view("backend.pages.orders.orders", compact("orders"));
    }
    public function create(){
        return view("backend.pages.orders.create");
    }
    public function store(Request $req){
        Order::create([
            "customer_id" => $req->customer_id,
            "total_price" => $req->total_price,
            "total_discount" => $req->total_discount,
            "total_vat" => $req->total_vat,
            "total_payable" => $req->total_payable,
            "seller_name" => $req->seller_name

        ]);
        return  redirect()->route("orders");

    }
    public function singleView(){
        return "";
    }
}
