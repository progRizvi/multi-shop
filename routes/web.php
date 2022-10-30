<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\CustomerController;
use App\Http\Controllers\backend\DiscountController;
use App\Http\Controllers\backend\FeedbackController;
use App\Http\Controllers\backend\OrderController;
use App\Http\Controllers\backend\PaymentController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\ReportController;
use App\Http\Controllers\backend\SellerController;

Route::get("/",[AdminController::class, "admin"])->name("/");

Route::get("/sellers",[SellerController::class,"list"])->name("sellers");
Route::get("/orders",[OrderController::class,"list"])->name("orders");
Route::get("/category",[CategoryController::class,"list"])->name("category");

Route::get("/category/create",[CategoryController::class,"create"])->name("category.create");

Route::get("/feedback",[FeedbackController::class,"list"])->name("feedback");
Route::get("/discount",[DiscountController::class,"list"])->name("discount");
Route::get("/customers",[CustomerController::class,"list"])->name("customers");
Route::get("/payments",[PaymentController::class,"list"])->name("payments");
Route::get("/reports",[ReportController::class,"list"])->name("reports");
Route::get("/products",[ProductController::class,"list"])->name("products");