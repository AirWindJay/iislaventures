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

Route::get('/whatwedo', function () {
    return view('whatwedo');
});

Route::get('/whoweare', function () {
    return view('whoweare');
});

Route::get('/getinvolved', function () {
    return view('getinvolved');
});

Route::get('/newsarticles', function () {
    return view('newsarticles');
});

Route::get('/joinus', function () {
    return view('joinus');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
