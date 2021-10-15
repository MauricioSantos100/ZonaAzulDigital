<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VeiculoController;

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/create',[UserController::class, 'create']);
Route::get('/users/{id}',[UserController::class, 'show']);

Route::get('/veiculos', [VeiculoController::class, 'index']);
Route::get('/veiculos/create',[VeiculoController::class, 'create']);
Route::post('/veiculos',[VeiculoController::class, 'store']);
Route::get('/veiculos/{id}',[VeiculoController::class, 'show']);