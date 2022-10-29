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

Route::get("/",[AdminController::class, "admin"]);

Route::get("/sellers",[SellerController::class,"list"]);
Route::get("/orders",[OrderController::class,"list"]);
Route::get("/category",[CategoryController::class,"list"]);
Route::get("/feedback",[FeedbackController::class,"list"]);
Route::get("/discount",[DiscountController::class,"list"]);
Route::get("/customers",[CustomerController::class,"list"]);
Route::get("/payments",[PaymentController::class,"list"]);
Route::get("/reports",[ReportController::class,"list"]);
Route::get("/products",[ProductController::class,"list"]);