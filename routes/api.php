<?php

use App\Http\Controllers\KebabController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SuggestionController;

Route::post('register', [UserController::class, 'register']);
Route::post('login', [UserController::class, 'login']);

Route::get('/kebab/showAll', [KebabController::class, 'showAllKebab']);
Route::get('/kebab/show/{id}', [KebabController::class, 'showKebab']);
Route::get('/kebab/details/{id}', [KebabController::class, 'showKebabDetails']);

Route::group(["middleware" => ["auth:sanctum"]], function() {

    Route::get('/profile', [UserController::class, 'profile']);
    Route::get('/user/{id}', [UserController::class, 'getUser']);
    Route::get('/logout', [UserController::class, 'logout']);
    Route::post('/change-password', [UserController::class, 'changePassword']);
    Route::get('/admin', [UserController::class, 'admin']);

    Route::post('/suggest/add', [SuggestionController::class, 'addSuggestion']);
    Route::get('/suggest', [SuggestionController::class, 'getAllSuggestions']);
    Route::put('/suggest/{id}/reviewed', [SuggestionController::class, 'markAsReviewed']);
    Route::delete('/suggest/{id}', [SuggestionController::class, 'deleteSuggestion']);

    Route::post('/kebab/add', [KebabController::class, 'addKebab']);
    Route::put('/kebab/update/{id}', [KebabController::class, 'updateKebab']);
    Route::delete('/kebab/delete/{id}', [KebabController::class, 'delKebab']);
    Route::post('/kebab/{id}/fav', [KebabController::class, 'addToFavorites']);

    //Filters
    Route::get('kebab/filter',[KebabController::class,'filterKebab']);

});
//Route::get('/user', function (Request $request) {return $request->user();})->middleware('auth:sanctum');

