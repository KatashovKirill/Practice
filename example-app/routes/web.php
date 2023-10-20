<?php

use Illuminate\Support\Facades\Route;

Route::get('funnycomicsland1', [App\Http\Controllers\funnycomicslandController::class, "main"]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');