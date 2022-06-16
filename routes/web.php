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
})->name('users');

Route::get('users/edit', function () {
    return view('users.edit');
})->name('user_edit');
//
Route::get('servShow', function () {
    return view('serv.show');
})->name('serv.show');
//
Route::get('servCreate', function () {
    return view('serv.create');
})->name('serv.create');
//
Route::get('/add_ads', function () {
    return view('add_ads');
})->name('add_ads');
//
Route::get('/ads', function () {
    return view('ads');
})->name('ads');
Route::get('/chat', function () {
    return view('chat');
})->name('chat');
//
Route::get('pay', function () {
    return view('pay');
})->name('pay');
//
Route::get('servChat', function () {
    return view('serv.Chat');
})->name('servChat');
//
Route::get('rating', function () {
    return view('rating');
})->name('rating');
//
Route::get('cnditions', function () {
    return view('pages.cnditions');
})->name('cnditions');
