<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

////////////PUBLIC ///////////
Route::get('/', [UserController::class, 'showHome']);

Route::get('/login', [UserController::class, 'showLogin']);
Route::post('/login', [UserController::class, 'login']);

Route::get('/userhome', [UserController::class, 'showProfile']);

//////////// USER ///////////
Route::get('/register', [UserController::class, 'showRegister']);
Route::post('/register/success', [UserController::class, 'register']);
Route::get('/register/success', [UserController::class, 'showRegisterSuccess']);
Route::get('/logout', [UserController::class, 'logout']);

Route::get('/support', [UserController::class, 'showSupport']);
