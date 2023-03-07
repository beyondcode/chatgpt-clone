<?php

use App\Http\Controllers\ChatController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ChatController::class, 'index']);
Route::post('/', [ChatController::class, 'store']);
Route::get('/reset', [ChatController::class, 'destroy']);
