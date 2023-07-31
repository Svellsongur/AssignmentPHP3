<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;

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
});//hiện tại route main đang để là về trang của laravel nên sửa đường dẫn đi

//Route phần login
Route::match(['GET','POST'],'/login', [LoginController::class,'login'])->name('login');

Route::post('/logout', [LoginController::class,'logout'])->name('logout');



//Route phần teacher
Route::get('/teacher', [TeacherController::class, 'list'])->name('list-teacher');

Route::post('/teacher', [App\Http\Controllers\TeacherController::class, 'index'])->name('search-teacher');

Route::match(['GET', 'POST'], '/add/teacher', [App\Http\Controllers\TeacherController::class, 'add'])->name('add-teacher');

Route::match(['GET', 'POST'], '/edit/teacher/{id}', [App\Http\Controllers\TeacherController::class, 'edit'])->name('edit-teacher');

Route::get('/delete/teacher/{id}', [App\Http\Controllers\TeacherController::class, 'delete'])->name('delete-teacher');

//Route phần subject
Route::get('/subject', [App\Http\Controllers\SubjectController::class, 'list'])->name('list-subject');

Route::post('/subject', [App\Http\Controllers\SubjectController::class, 'index'])->name('search-subject');

Route::match(['GET', 'POST'], '/add/subject', [App\Http\Controllers\SubjectController::class, 'add'])->name('add-subject');

Route::match(['GET', 'POST'], '/edit/subject/{id}', [App\Http\Controllers\SubjectController::class, 'edit'])->name('edit-subject');

Route::get('/delete/subject/{id}', [App\Http\Controllers\SubjectController::class, 'delete'])->name('delete-subject');

