<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\ordercontroller;
Route::get('/orders', [ordercontroller::class, 'index']);
//Route::get('/orders/{id}', [ordercontroller::class, 'show']);
Route::get('/orders/create', [ordercontroller::class, 'create']);
Route::post('/orders', [ordercontroller::class, 'store']);
Route::get('/orders/edit/{id}', [ordercontroller::class, 'edit']);
Route::post('/orders/update/{id}', [ordercontroller::class, 'update']);
Route::get('/orders/destroy/{id}', [ordercontroller::class, 'destroy']);


use App\Http\Controllers\detailcontroller;
Route::get('/details', [detailcontroller::class, 'index']);
Route::get('/detailm/{id}', [detailcontroller::class, 'show']);
