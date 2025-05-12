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

Route::get('atores', [AtoresController::class, 'index'])->middleware('auth')->name('atores.index');
Route::get('atores/create', [AtoresController::class, 'create'])->middleware('auth')->name('atores.create');
Route::post('atores/store', [AtoresController::class, 'store'])->name('atores.store');
Route::get('atores/{id}/destroy', [AtoresController::class, 'destroy'])->middleware('auth');
Route::get('atores/{id}/edit', [AtoresController::class, 'edit'])->middleware('auth')->name('atores.edit');
// Route::put('atores/{id}/update', [AtoresController::class, 'update'])->middleware('auth')->name('atores.update');
Route::put('/atores/{id}', [AtoresController::class, 'update'])->name('atores.update')->middleware('auth')->name('atores.update');

Route::Resource('atores', AtoresController::class)->middleware('auth');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
