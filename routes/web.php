<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',  [HomeController::class, 'index']);
Route::get('/about',  [AboutController::class, 'index']);
