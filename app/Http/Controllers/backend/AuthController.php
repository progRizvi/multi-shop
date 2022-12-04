<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
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

            if (auth()->user()->role === "user") {
                notify()->success("Login Success");
                return redirect()->route("index");
            }
            notify()->success("Login Success");
            return redirect()->route("/");
        } else {
            notify()->error("Login Failed");
            return redirect()->back();
        }
    }
    public function register()
    {
        return view("backend.pages.auth.register");
    }
    public function registerStore(Request $req)
    {
        $req->validate([
            "firstName" => "required",
            "lastName" => "required",
            "email" => "required|email",
            "gender" => "required",
            "role" => "required",
            "password" => "required",
        ]);
        $password = bcrypt($req->password);
        User::create([
            "first_name" => $req->firstName,
            "last_name" => $req->lastName,
            "user_name" => $req->userName,
            "email" => $req->email,
            "gender" => $req->gender,
            "role" => $req->role,
            "password" => $password,
        ]);
        notify()->success("Registration Success");
        return redirect()->route("login.show");
    }
    public function logout()
    {
        Auth::logout();
        notify()->success("Logout Success");
        return redirect()->back();
    }
}