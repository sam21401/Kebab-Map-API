<?php

use App\Http\Controllers\KebabViewsController;
use App\Http\Controllers\SugestionViewsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
Route::get('/', function () {
    return view('welcome');
});
Route::view('/api/documentation', 'scribe.index');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');


Route::middleware('auth')->group(function () {
    Route::get('/suggestions', [SugestionViewsController::class, 'getAllSuggestions'])->name('suggestions.index');
    Route::put('/suggestions/markReviewed/{id}', [SugestionViewsController::class, 'markAsReviewed'])->name('suggestions.markAsReviewed');
    Route::delete('/suggestions/deleteSuggestion/{id}', [SugestionViewsController::class, 'deleteSuggestion'])->name('suggestions.deleteSuggestion');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::resource('kebabs', KebabViewsController::class);
});
