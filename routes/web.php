<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
})->name('main');
Route::get('/where', function () {
    return view('where');
});
// Страница Авторизации
Route::get('/login', function () {
    return view('login');
});
// Метод авторизации
Route::post('/login', [LoginController::class,'login'])->name('login.form');
// Страница Регистрации
Route::get('/registr', function () {
    return view('registr');
});
// Метод Регистрации
Route::post('/registration', [LoginController::class, 'registration'])->name('registration.form');
// Метод выхода из аккаунта
Route::get('/logout', [LoginController::class, 'logout'])->name('logout.form');
// Страница Каталога
Route::get('/catalog', function () {
    return view('catalog');
});
Route::get('/openProduct', function () {
    return view('openProduct');
});
// Доступ только авторизированному пользователю
Route::middleware('isUser')->group(function (){
    // Страница Корзина
    Route::get('/basket', function () {
        return view('basket');
    })->name('basket');
});

// Доступ только авторизованному администратору
Route::middleware('isAdmin')->group(function (){
    // Страница Администратора
    Route::get('/admin', function () {
        return view('admin');
    })->name('admin');
    Route::delete('/category/{id}', [CategoryController::class, 'store'])->name('category.delete');
});
