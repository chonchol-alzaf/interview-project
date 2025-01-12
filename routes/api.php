<?php

use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

Route::get("orders", [OrderController::class,"index"])->name("orders.index");
Route::get("orders/{order_id}", [OrderController::class,"show"])->name("orders.show");