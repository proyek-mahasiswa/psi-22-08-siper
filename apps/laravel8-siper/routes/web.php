<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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
    return view('index');
});

// REGISTER
Route::get('/register', function () {
    return view('register');
});


Route::get('/register', 'App\Http\Controllers\RegisterController@index');
Route::post('/create_account', 'App\Http\Controllers\RegisterController@storeRegister');

Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');
Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/homepage_pengunjung', function () {
    return view('auth.homepage_pengunjung');
});

