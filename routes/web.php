<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/where', function () {
    return view('where');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/registr', function () {
    return view('registr');
});
Route::get('/catalog', function () {
    return view('catalog');
});
Route::get('/openProduct', function () {
    return view('openProduct');
});
Route::get('/basket', function () {
    return view('basket');
});
