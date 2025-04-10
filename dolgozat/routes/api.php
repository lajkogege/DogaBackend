<?php

use App\Http\Controllers\TevekenysegekContoller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/tevekenysegek', [TevekenysegekContoller::class, 'index']);
Route::post('/tevekenyseg',[TevekenysegekContoller::class, 'store']);
Route::delete('/tevekenyseg/{id}',[TevekenysegekContoller::class,'destroy']);
Route::put('tevekenyseg/{id}', [TevekenysegekContoller::class,'update']);