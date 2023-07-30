<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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




Route::get('/loginform', function () {
    return view('default.login');
})->name('loginform');

Route::get('/main', function () {
    return view('admin.course.index');
});



Route::match(['GET', 'POST'], '/login', [LoginController::class, 'login'])->name('login');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

//hiện tại route main đang để là về trang của laravel nên sửa đường dẫn đi 
