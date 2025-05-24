<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products/create', [ProductsController::class,'create']);
Route::post('/products', [ProductsController::class,'store']);


Route::get('/products/{category?}', [ProductsController::class, 'showProductsByCategory']);
