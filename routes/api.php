<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AddressController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'findOne']);

Route::get('/adresses', [AddressController::class, 'index']);
Route::get('/adresses/{id}', [AddressController::class, 'findOne']);
