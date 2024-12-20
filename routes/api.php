<?php

use App\Http\Controllers\KebabController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;










Route::group(["middleware" => ["auth:sanctum"]], function() {
    Route::get('/showAllKebab/{id}', [KebabController::class, 'showAllKebab']);
    Route::get('/showKebab/{id}', [KebabController::class, 'showKebab']);
    Route::post('/addKebab', [KebabController::class, 'addKebab']);
    Route::put('/updateKebab/{id}', [KebabController::class, 'updateKebab']);
    Route::delete('/delKebab/{id}', [KebabController::class, 'delKebab']);
});
//Route::get('/user', function (Request $request) {return $request->user();})->middleware('auth:sanctum');
