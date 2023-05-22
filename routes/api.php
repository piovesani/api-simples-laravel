<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AddressController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'findOne']);
Route::post('/users', [UserController::class, 'insert']);

Route::get('/adresses', [AddressController::class, 'index']);
Route::get('/adresses/{id}', [AddressController::class, 'findOne']);
Route::post('/adresses', [AddressController::class, 'insert']);

Route::get('/invoices', [UserController::class, 'index']);
Route::post('/invoices', [UserController::class, 'insert']);


//Route::get('/users/update', [PostController::class, 'update']);
//Route::get('/users/delete/', [PostController::class, 'delete']);
