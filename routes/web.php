<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::controller(IndexController::class)->group(function () {
    Route::get("/", "index");
});

Route::prefix("products")->controller(ProductController::class)->group(function () {
    Route::get("/", "index");
    Route::get("/create", "create");
    Route::get("/{id}/historic", "historic");

    Route::post("/", "store");

    Route::delete("/{id}", "delete");
    Route::put("/{id}", "edit");
});
