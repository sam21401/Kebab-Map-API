<?php

use App\Http\Controllers\KebabController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::post('register', [UserController::class, 'register']);
Route::post('login', [UserController::class, 'login']);

Route::group(["middleware" => ["auth:sanctum"]], function() {

    Route::get('/profile', [UserController::class, 'profile']);
    Route::get('/logout', [UserController::class, 'logout']);
    Route::get('/admin', [UserController::class, 'admin']);

    Route::get('/kebab/showAll', [KebabController::class, 'showAllKebab']);
    Route::get('/kebab/show/{id}', [KebabController::class, 'showKebab']);
    Route::post('/kebab/add', [KebabController::class, 'addKebab']);
    Route::put('/kebab/update/{id}', [KebabController::class, 'updateKebab']);
    Route::delete('/kebab/delete/{id}', [KebabController::class, 'delKebab']);
    Route::get('/kebab/details/{id}', [KebabController::class, 'showKebabDetails']);

});
//Route::get('/user', function (Request $request) {return $request->user();})->middleware('auth:sanctum');

