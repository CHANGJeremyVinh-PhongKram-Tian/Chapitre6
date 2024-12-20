<?php

use App\Http\Controllers\visiteurController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::post('/visiteur/initpwds',[visiteurController::class,'initPasswords']);
Route::post('/visiteur/login',[visiteurController::class,'login']);
Route::get('/visiteur/logout',[visiteurController::class,'logout'])->middleware('auth:sanctum');
Route::get('/visiteur/unauthorized',[visiteurController::class,'unauthorized'])->name("login");

