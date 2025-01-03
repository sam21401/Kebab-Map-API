<?php

use App\Http\Controllers\KebabController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::post('register', [UserController::class, 'register']);
Route::post('login', [UserController::class, 'login']);

Route::group(["middleware" => ["auth:sanctum"]], function() {

    Route::get('profile', [UserController::class, 'profile']);
    Route::get('logout', [UserController::class, 'logout']);
    Route::get('admin', [UserController::class, 'admin']);

    Route::get('/showAllKebab', [KebabController::class, 'showAllKebab']);
    Route::get('/showKebab/{id}', [KebabController::class, 'showKebab']);
    Route::post('/addKebab', [KebabController::class, 'addKebab']);
    Route::put('/updateKebab/{id}', [KebabController::class, 'updateKebab']);
    Route::delete('/delKebab/{id}', [KebabController::class, 'delKebab']);
    Route::get('/kebab/details/{id}', [KebabController::class, 'showKebabDetails']);

});
//Route::get('/user', function (Request $request) {return $request->user();})->middleware('auth:sanctum');

