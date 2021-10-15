<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

Route::get('/', [UsuarioController::class, 'index']);
Route::get('/usuarios/create',[UsuarioController::class, 'create']);
Route::post('/',[UsuarioController::class, 'store']);
Route::get('/usuarios/{id}',[UsuarioController::class, 'show']);