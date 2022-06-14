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
//
Route::get('r', function () {
    return view('Auth.r');
})->name('r');

Route::get('login', function () {
    return view('Auth.login');
})->name('login');
//
Route::get('/home', function () {
    return view('home');
})->name('home');
//
Route::get('users/', function () {
    return view('users/index');
});

Route::get('/user/edit', function () {
    return view('users.edit');
})->name('user_edit');


//
Route::get('/service_request_form', function () {
    return view('service_request_form');
})->name('service_request_form');
Route::get('/service_request_form2', function () {
    return view('service_request_form2');
});

Route::get('/ads', function () {
    return view('ads');
});
Route::get('/chat', function () {
    return view('chat');
});
