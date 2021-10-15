<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\VeiculoController;

Route::get('/', [UsuarioController::class, 'index']);
Route::get('/usuarios/create',[UsuarioController::class, 'create']);
Route::post('/',[UsuarioController::class, 'store']);
Route::get('/usuarios/{id}',[UsuarioController::class, 'show']);

Route::get('/veiculos', [VeiculoController::class, 'index']);
Route::get('/veiculos/create',[VeiculoController::class, 'create']);
Route::post('/veiculos',[VeiculoController::class, 'store']);
Route::get('/veiculos/{id}',[VeiculoController::class, 'show']);