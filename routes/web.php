<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AtoresController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('atores', function () {
//     return "Atores - Listagem de atores.";
// });

Route::get('atores', [AtoresController::class, 'index'])->middleware('auth');
Route::get('atores/{id}', [AtoresController::class, 'show'])->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
