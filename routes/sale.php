<?php

use App\Http\Controllers\Sale\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', [HomeController::class,'index']);
