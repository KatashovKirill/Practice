<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/funnycomicsland', [App\Http\Controllers\funnycomicslandController::class, 'index']);
