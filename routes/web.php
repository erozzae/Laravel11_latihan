<?php

use App\Http\Middleware\CheckAge;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/login', function () {
    return view('login');
})->name('login');


Route::get('restricted', function() {
    return view('welcome');
})->middleware(CheckAge::class);;
