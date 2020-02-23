<?php

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

Route::get('/home/', function () {
    return view('party.home');
});

Route::get('/news/', function () {
    return view('party.news');
});

Route::get('/menu/', function () {
    return view('party.menu');
});

Route::get('/contact/', function () {
    return view('party.contact');
});