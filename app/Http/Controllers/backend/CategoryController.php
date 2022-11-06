<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list(){
        $cats = Category::all();
        return view("backend.pages.categories.categories", compact("cats"));
    }
    public function create(){
        return view("backend.pages.categories.create");
    }
    public function post(Request $req){
        Category::create([
            "name" => $req->name,
            "description" =>$req->description,
            "status" => $req->status
        ]);
        return redirect()->route("category");
    }
    public function destroy($id){
        $cat = Category::find($id);
        $cat->delete();

        return redirect()->back();
    }
}
