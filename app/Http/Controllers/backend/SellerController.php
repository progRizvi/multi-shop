<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Seller;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function list(){
        $sellers = Seller::paginate(5);
        return view("backend.pages.sellers.sellers",compact("sellers"));
    }
    public function create(){
        return view("backend.pages.sellers.create");
    }
    public function store(Request $req){

        $req->validate([
            "sellerName" => 'required',
            "sellerPhone" =>  'required|unique:sellers,seller_number',
            "sellerEmail" => 'required|unique:sellers,seller_email|email'
        ]);
        $imgName = null;
        if($req->hasFile("sellerImg")){
            $imgName = date("Ymdhis").".".$req->file("sellerImg")->getClientOriginalExtension();
            $req->file("sellerImg")->storeAs("/uploads/sellers/",$imgName);
        }
        Seller::create([
            "seller_name"=>$req->sellerName,
            "seller_number" => $req->sellerPhone,
            "img" => $imgName,
            "seller_address" => $req->sellerAddress,
            "seller_email" => $req->sellerEmail,
        ]);


        return redirect()->route("sellers");
    }

    public function singleOne($id){
        $seller = Seller::find($id);
        // dd($seller);
        return view("backend.pages.sellers.single-seller", compact("seller"));
    }
    public function deleteOne($id){
        $seller = Seller::find($id);
        $seller->delete();
        return redirect()->back();
    }
    public function editSeller($id){
        $seller = Seller::find($id);
        return view("backend.pages.sellers.edit",compact("seller"));
    }
    public function update(Request $req, $id){
            $seller = Seller::find($id);
            $seller->seller_name = $req->sellerName;
            $seller->seller_email = $req->sellerEmail;
            $seller->seller_number = $req->sellerPhone;
            $seller->seller_address = $req->sellerAddress;
            $seller->update();


        return redirect()->route("sellers");

    }
}