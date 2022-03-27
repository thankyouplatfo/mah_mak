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
    return View::make('pages.home');
});
Route::get('/about', function () {
    return View::make('pages.contact');
});

Route::get('/explorer', function () {
    return view('sections.explorer');
});

Route::get('/ads', function () {
    return view('ads');
});

Route::get('/chat', function () {
    return view('chat');
});

Route::get('/test', function () {
    return view('test');
});
