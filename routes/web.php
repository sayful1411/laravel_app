<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

// assignment 8 route
Route::get('/profile/{id}', [ProfileController::class, 'index']);

// assignment 7 route
Route::get('message', [UserController::class, 'message']);
