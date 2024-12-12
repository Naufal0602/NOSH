<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodsController;



Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
});


Route::resource('foods', FoodsController::class);