<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\VeiculoController;
use App\Http\Controllers\EstacionamentoController;

Route::get('/', [UsuarioController::class, 'index']);
Route::get('/usuarios/create',[UsuarioController::class, 'create']);
Route::post('/',[UsuarioController::class, 'store']);
Route::get('/usuarios/{id}',[UsuarioController::class, 'show']);
Route::get('/usuarios/{id}/edit',[UsuarioController::class, 'edit']);
Route::put('/usuarios/{id}',[UsuarioController::class, 'update']);
Route::delete('/usuarios/{id}',[UsuarioController::class, 'destroy']);

Route::get('/veiculos', [VeiculoController::class, 'index']);
Route::get('/veiculos/create',[VeiculoController::class, 'create']);
Route::post('/veiculos',[VeiculoController::class, 'store']);
Route::get('/veiculos/{id}',[VeiculoController::class, 'show']);
Route::delete('/veiculos/{id}',[VeiculoController::class, 'destroy']);

Route::get('/estacionamentos', [EstacionamentoController::class, 'index']);
Route::get('/estacionamentos/create',[EstacionamentoController::class, 'create']);
Route::post('/estacionamentos',[EstacionamentoController::class, 'store']);
Route::get('/estacionamentos/{id}',[EstacionamentoController::class, 'show']);
Route::delete('/estacionamentos/{id}',[EstacionamentoController::class, 'destroy']);
