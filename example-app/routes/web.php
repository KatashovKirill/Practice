<?php

use Illuminate\Support\Facades\Route;

Route::get('funnycomicsland', [App\Http\Controllers\funnycomicslandController::class, "main"]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
