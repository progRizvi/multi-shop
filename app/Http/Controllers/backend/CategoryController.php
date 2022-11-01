<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list(){
        return view("backend.pages.categories.categories");
    }
    public function create(){
        return view("backend.pages.categories.create");
    }
    public function post(Request $req){
        // dd($req->all());
        Category::create([
            "name" => $req->name,
            "description" =>$req->description,
            "status" => $req->status
        ]);
        return redirect()->route("category");
    }
}
