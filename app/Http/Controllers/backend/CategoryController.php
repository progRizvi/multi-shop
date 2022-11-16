<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function list() {
        $cats = Category::all();
        return view("backend.pages.categories.categories", compact("cats"));
    }
    public function create()
    {
        return view("backend.pages.categories.create");
    }
    public function post(Request $req)
    {
        $req->validate([
            "name" => "required|unique:categories,name",
        ]);

        $imgName = null;
        if ($req->hasFile("img")) {

            $imgName = date("Ymdhis") . "." . $req->file("img")->getClientOriginalExtension();
            $req->file("img")->storeAs("/uploads/category", $imgName);
        }
        $slug = strtolower($req->name);
        $result = str_replace(" ", "-", $slug);
        $result = str_replace("'", "", $result);
        Category::create([
            "name" => $req->name,
            "img" => $imgName,
            "slug" => $result,
            "description" => $req->description,
            "status" => $req->status,
        ]);
        return redirect()->route("category");
    }
    public function destroy($id)
    {
        $cat = Category::find($id);
        $cat->delete();

        return redirect()->back();
    }
}