<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::post('register', [UserController::class, 'register']);
Route::post('login', [UserController::class, 'login']);

Route::group(["middleware" => ["auth:sanctum"]], function() {
//profile page
    Route::get('profile', [UserController::class, 'profile']);
});

// Route::get('/user', function (Request $request) {return $request->user();})->middleware('auth:sanctum');
