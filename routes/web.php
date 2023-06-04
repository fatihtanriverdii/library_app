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
    return view('index');
})->name('home');

use App\Http\Controllers\WelcomeController;

Route::get('/', [WelcomeController::class, 'index'])->name('home');
Route::get('/library', [WelcomeController::class, 'index2'])->name('library');

Route::get('/about', function () {
    return view('layouts.about');
})->name('about');


Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/registration', function () {
    return view('registration');
})->name('registration');

Route::get('/signIn', function () {
    return view('signIn');
})->name('signIn');

Route::get('/admin', function () {
    return view('admin');
})->name('admin');

Route::get('/adminBooks', function () {
    return view('adminBooks');
})->name('adminBooks');

Route::get('/adminMessages', function () {
    return view('adminMessages');
})->name('adminMessages');

Route::get('/adminSettings', function () {
    return view('adminSettings');
})->name('adminSettings');

Route::get('/adminUsers', function () {
    return view('adminUsers');
})->name('adminUsers');

Route::post('/register', 'App\Http\Controllers\RegistrationController@register')->name('register');

use App\Http\Controllers\SignInController;

Route::post('/signin', [SignInController::class, 'signIn'])->name('signInC');

use App\Http\Controllers\AdminsignInController;

Route::post('/adminsignin', [AdminsignInController::class, 'adminsignIn'])->name('adminsignIn');   

use App\Http\Controllers\BookController;

Route::post('/book-submit', [BookController::class, 'submit'])->name('book.submit');

Route::get('/book/{id}', [BookController::class, 'show'])->name('book');

Route::get('/search', [BookController::class, 'search'])->name('search');


Route::get('/update', function () {
    return view('update');
})->name('update');

Route::get('/adminsignin', function () {
    return view('adminsignin');
})->name('adminsignin');

use App\Http\Controllers\UserController;

Route::post('/user-submit', [UserController::class, 'submit'])->name('user.submit');

Route::put('/book/update', 'BookController@updateBook')->name('book.update');



