<?php

use Illuminate\Support\Facades\Route;


Route::get('funnycomicsland', [App\Http\Controllers\funnycomicslandController::class, "main"]);
