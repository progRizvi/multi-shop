<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view("backend.pages.auth.login");
    }
    public function store(Request $req)
    {
        $credentials = $req->except("_token");
        Auth::attempt($credentials);
        if (auth()->user()) {
            return redirect()->route("/");
        } else {
            return redirect()->back()->with("message", "Login Failed");
        }
    }
    public function register()
    {
        return view("backend.pages.auth.register");
    }
    public function registerStore(Request $req)
    {
        dd($req->all());

        return "Hello";
    }
    public function delete()
    {
        Auth::logout();
        return redirect()->route("login.show");
    }
}