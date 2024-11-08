<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;


Route::get('/', function () {
    return view('main');
});


Route::get('/products', [ProductsController::class, 'viewProducts'])->name('viewProducts');

