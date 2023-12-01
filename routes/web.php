<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Demo\demoController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', [demoController::class, 'Index']);
