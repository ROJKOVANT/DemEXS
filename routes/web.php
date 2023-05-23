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
});/*страница о нас*/
Route::get('/where', function () {
    return view('where');
});/*страница как нас найти*/
Route::get('/login', function () {
    return view('login');
});/*страница вход*/
Route::get('/registr', function () {
    return view('registr');
});/*страница ркгистрация*/
Route::get('/catalog', function () {
    return view('catalog');
});/*страница каталог*/
Route::get('/openProduct', function () {
    return view('openProduct');
});/*страница открытый товар*/
Route::get('/basket', function () {
    return view('basket');
});/*страница корзина*/

/*Админ-панель*/
Route::get('/admin', function () {
    return view('admin.admin');
});/*страница админ*/
Route::get('/addProduct', function () {
    return view('admin.addProduct');
});/*страница админ создать товар*/
Route::get('/allCategory', function () {
    return view('admin.allCategory');
});/*страница все категории*/
Route::get('/addCategory', function () {
    return view('admin.addCategory');
});/*страница админ создать категорию*/
