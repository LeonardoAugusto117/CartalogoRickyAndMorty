<?php

use App\Http\Controllers\CharacterController;
use Illuminate\Support\Facades\Route;


Route::get('/', [CharacterController::class, 'index']);
Route::get('/chars/{id}', [CharacterController::class, 'characters']);
Route::get('/acess', [CharacterController::class, 'login']);
Route::get('/acess.register', [CharacterController::class, 'register']);
Route::get('/information', [CharacterController::class, 'sobre']);