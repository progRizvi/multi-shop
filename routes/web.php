<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\backend\AuthController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\CustomerController;
use App\Http\Controllers\backend\DiscountController;
use App\Http\Controllers\backend\FeedbackController;
use App\Http\Controllers\backend\OrderController;
use App\Http\Controllers\backend\PaymentController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\ReportController;
use App\Http\Controllers\backend\SellerController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

Route::get("/login", [AuthController::class, "login"])->name("login.show");
Route::post("/login", [AuthController::class, "store"])->name("login.store");
Route::get("/register", [AuthController::class, "register"])->name("register.show");
Route::post("/register/store", [AuthController::class, "registerStore"])->name("register.store");
Route::get("/logout/", [AuthController::class, "logout"])->name("logout");

// FrontEnd Routes

Route::get("/", [HomeController::class, "index"])->name("index");
Route::get("/shop", [ShopController::class, "shop"])->name("shop");
Route::get("/shop/product/{slug}", [ShopController::class, "singleView"])->name("product.view");

// Backend Routes
Route::group(["middleware" => ["auth", "checkAdminSeller"], "prefix" => "admin"], function () {

    Route::get("/", [AdminController::class, "admin"])->name("/");

    // Seller Routes

    Route::group(["middleware" => "checkAdmin"], function () {
        Route::get("/sellers", [SellerController::class, "list"])->name("sellers");
        Route::get("/sellers/create", [SellerController::class, "create"])->name("sellers.create");
        Route::post("/sellers/store", [SellerController::class, "store"])->name("sellers.store");
        Route::get("/sellers/list/{id}", [SellerController::class, "singleOne"])->name("seller.single");
        Route::get("/sellers/delete/{id}", [SellerController::class, "deleteOne"])->name("seller.deleteOne");
        Route::get("/sellers/list/edit/{id}", [SellerController::class, "editSeller"])->name("seller.edit");
        Route::post("/sellers/update/{id}", [SellerController::class, "update"])->name("seller.update");

        Route::get("/category", [CategoryController::class, "list"])->name("category");
        Route::get("/category/create", [CategoryController::class, "create"])->name("category.create");
        Route::post("/category/create", [CategoryController::class, "post"])->name("category.post");
        Route::get("/category/destroy/{id}", [CategoryController::class, "destroy"])->name("category.destroy");
    });

// Orders
    Route::get("/orders", [OrderController::class, "list"])->name("orders");
    Route::get("/orders/create", [OrderController::class, "create"])->name("order.create");
    Route::post("/orders/store", [OrderController::class, "store"])->name("order.store");
    Route::get("/orders/list/{id}", [OrderController::class, "singleView"])->name("single.view");

    Route::get("/feedback", [FeedbackController::class, "list"])->name("feedback");

// Discount
    Route::get("/discount", [DiscountController::class, "list"])->name("discount");
    Route::get("/discount/create", [DiscountController::class, "create"])->name("discount.create");
    Route::post("/discount/store", [DiscountController::class, "store"])->name("discount.store");
    Route::get("/discount/destroy.{id}", [DiscountController::class, "destroy"])->name("discount.destroy");
    Route::get("/discount/list/edit/{id}", [DiscountController::class, "edit"])->name("discount.edit");
    Route::post("/discount/update/{id}", [DiscountController::class, "update"])->name("discount.update");

    Route::get("/customers", [CustomerController::class, "list"])->name("customers");
    Route::get("/payments", [PaymentController::class, "list"])->name("payments");
    Route::get("/reports", [ReportController::class, "list"])->name("reports");

    // Products
    Route::get("/products", [ProductController::class, "list"])->name("products");
    Route::get("/products/create", [ProductController::class, "create"])->name("products.create");
    Route::post("/products/store", [ProductController::class, "store"])->name("products.store");
    Route::get("/products/destroy/{id}", [ProductController::class, "destroy"])->name("products.destroy");
    Route::get("/products/singleView/{id}", [ProductController::class, "singleView"])->name("product.single.view");
    Route::get("/products/list/edit/{id}", [ProductController::class, "edit"])->name("product.edit");
    Route::post("/products/list/update/{id}", [ProductController::class, "update"])->name("product.update");
});