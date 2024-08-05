<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index']);
Route::get('/customer-login', [PageController::class, 'customerLogin']);
Route::get('/owner-login', [PageController::class, 'ownerLogin']);

