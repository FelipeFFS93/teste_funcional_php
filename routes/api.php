<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contaBancariaController;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::apiResource('banco','contaBancariaController');

Route::post('/depositar', [contaBancariaController::class,'depositar']);
Route::post('/sacar', [contaBancariaController::class,'sacar']);
Route::post('/saldo', [contaBancariaController::class,'saldo']);