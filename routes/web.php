<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\ordercontroller;
Route::get('/orders', [ordercontroller::class, 'index']);
Route::get('/orders/{id}', [ordercontroller::class, 'show']);

use App\Http\Controllers\detailcontroller;
Route::get('/details', [detailcontroller::class, 'index']);
Route::get('/detailm/{id}', [detailcontroller::class, 'show']);
