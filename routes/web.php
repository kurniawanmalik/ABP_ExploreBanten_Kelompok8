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

Route::get('/alam', function () {
    return view('alam');
});

Route::get('/budaya', function () {
    return view('budaya');
});
Route::get('/kuliner', function () {
    return view('kuliner');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/maps', function () {
    return view('maps');
});

Route::get('/reviews', function () {
    return view('reviews');
});
