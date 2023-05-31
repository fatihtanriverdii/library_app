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


Route::get('/about', function () {
    return view('layouts.about');
})->name('about');


Route::get('/book', function () {
    return view('kitapornek');
})->name('book');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/library', function () {
    return view('index2');
})->name('library');

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



