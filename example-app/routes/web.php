<?php

use Illuminate\Support\Facades\Route;

Route::get('funnycomicsland1', [App\Http\Controllers\funnycomicslandController::class, "main"]);

Route::get('funnycomicsland', [App\Http\Controllers\funnycomicslandController::class, "test"]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Задание 8.4
Route::get('zadanie84', [App\Http\Controllers\funnycomicslandController::class, "test"]);