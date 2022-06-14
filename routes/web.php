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

Route::get('users/', function () {
    return view('users/index');
});

Route::get('/service-request-form', function () {
    return view('service-request-form');
});
Route::get('/service-request-form2', function () {
    return view('service-request-form2');
});

Route::get('/home', function () {
    return view('home');
});
Route::get('/about', function () {
    return View::make('pages.contact');
});

Route::get('/explorer', function () {
    return view('sections.explorer');
})->name('exp');

Route::get('/ads', function () {
    return view('ads');
});

Route::get('/chat', function () {
    return view('chat');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/acount-setting', function () {
    return view('users.acount-setting');
})->name('acount-setting');

Route::get('r', function () {
    return view('Auth.r');
})->name('r');

Route::get('login', function () {
    return view('Auth.login');
})->name('login');
