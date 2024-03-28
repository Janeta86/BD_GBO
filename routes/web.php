<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\ordercontroller;
Route::get('/orders', [ordercontroller::class, 'index'])->middleware('auth');
//Route::get('/orders/{id}', [ordercontroller::class, 'show'])->middleware('auth');
Route::get('/orders/create', [ordercontroller::class, 'create'])->middleware('auth');
Route::post('/orders', [ordercontroller::class, 'store'])->middleware('auth');
Route::get('/orders/edit/{id}', [ordercontroller::class, 'edit'])->middleware('auth');
Route::post('/orders/update/{id}', [ordercontroller::class, 'update'])->middleware('auth');
Route::get('/orders/destroy/{id}', [ordercontroller::class, 'destroy'])->middleware('auth');

use App\Http\Controllers\detailcontroller;
Route::get('/details', [detailcontroller::class, 'index'])->middleware('auth');
Route::get('/detailm/{id}', [detailcontroller::class, 'show'])->middleware('auth');

use App\Http\Controllers\LoginController;
Route::get('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::post('/auth', [LoginController::class, 'authenticate']);

Route::get('/error', function () {
    return view('error', ['message' => session('message')]);
});
