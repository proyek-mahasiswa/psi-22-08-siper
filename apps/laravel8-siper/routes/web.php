<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\BukuController;
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

Route::get('/homepage_pengunjung', function () {
    return view('pengunjung.homepage_pengunjung');
});

Route::get('/daftarbuku', function () {
    return view('petugas.daftarbuku');
});

// REGISTER
Route::get('/register', function () {
    return view('auth.register');
});
Route::get('/register', 'App\Http\Controllers\RegisterController@index');
Route::post('/create_account', 'App\Http\Controllers\RegisterController@storeRegister');


Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

//Tambah Buku dari halaman petugas
Route::get('/tambah_buku', function () {
    return view('petugas.tambah_buku');
});
Route::get('/tambah_buku', 'App\Http\Controllers\BukuController@index');
Route::post('/buku', 'App\Http\Controllers\BukuController@storeBook');

//fix ini untuk menampilkan buku di homepage pengunjung
Route::get('homepage_pengunjung', 'App\Http\Controllers\BukuController@showBook');

//untuk melakukan loaning (peminjaman)
Route::get('/loaningpage_pengunjung', function () {
    return view('pengunjung.loaningpage_pengunjung');
});

//untuk menampilkan detail buku dan dari halaman ini akan dilakukan peminjaman
Route::get('/book/detail/{id}', [App\Http\Controllers\BukuController::class, 'getDetail'])->name('book/detail/{id}');
Route::get('/books/detail{id}', 'BukuController@getDetail');
