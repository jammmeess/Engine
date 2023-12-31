<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GameController;
// use App\Http\Controllers\PurchaseController;

////////////PUBLIC ///////////
Route::get('/', [UserController::class, 'showHome']);

Route::get('/login', [UserController::class, 'showLogin']);
Route::post('/login', [UserController::class, 'login']);

Route::get('/userhome', [UserController::class, 'showUserHome']);

//////////// USER ///////////
Route::get('/register', [UserController::class, 'showRegister']);
Route::post('/register/success', [UserController::class, 'register']);
Route::get('/register/success', [UserController::class, 'showRegisterSuccess']);
Route::get('/logout', [UserController::class, 'logout']);

Route::get('/support', [UserController::class, 'showSupport']);
Route::get('/support/forgot_password', [UserController::class, 'showForgotpw']);

Route::get('/usersupport', [UserController::class, 'showUserSupport']);

Route::get('/profile', [UserController::class, 'showProfile']);
Route::put('/profile/{id}/upload_photo', [UserController::class, 'uploadPhotoProfile']); 

Route::get('/store', [GameController::class, 'showStore']);

Route::get('/userstore', [GameController::class, 'showUserStore']);
Route::post('/userstore', [GameController::class, 'makePurchase']);

Route::post('/userstore/checkout', [GameController::class, 'placePurchase']);

Route::get('/my_library', [GameController::class, 'showPurchases']);
Route::get('/my_library/{id}', [GameController::class, 'showPurchasedGame']);

Route::get('/store/{id}', [GameController::class, 'showGameLogin']);
Route::get('/userstore/{id}', [GameController::class, 'showGameProfile']);
