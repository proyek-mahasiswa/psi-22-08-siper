<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PetugasController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});

Route::get('/register', function () {
    return view('auth.register');
});


Route::get('/admin-dashboard-pengunjung', function () {
    return view('admin.admin-dashboard-pengunjung');
});
Route::get('/admin-dashboard-petugas', function () {
    return view('admin.admin-dashboard-petugas');
});

Route::get('/admin-status-buku', function () {
    return view('admin.admin-status-buku');
});

Route::get('/profile_pengunjung]', function () {
    return view('pengunjung.profile_pengunjung');
});

Route::get('/petugas_profile]', function () {
    return view('petugas.petugas_profile');
});







Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/register', 'App\Http\Controllers\RegisterController@index');
Route::post('/create_account', 'App\Http\Controllers\RegisterController@storeRegister');


// Route::get('/login', [App\Http\Controllers\LoginController::class, 'index']);
Route::post('/postlogin', 'App\Http\Controllers\LoginController@postLogin');
Auth::routes();


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware'=>['auth','CheckLevel:admin']], function(){
    Route::get('/admin-dashboard-pengunjung', [App\Http\Controllers\AdminController::class, 'index'])->name('admin-dashboard-pengunjung');
    Route::get('/admin-status-buku', [App\Http\Controllers\AdminController::class, 'indexBook'])->name('admin-status-buku');
    Route::get('/admin-dashboard-petugas', [App\Http\Controllers\AdminController::class, 'indexPetugas'])->name('admin-dashboard-petugas');

    Route::get('/profile-admin', [App\Http\Controllers\AdminController::class, 'profileAdmin'])->name('profile-admin');
});

Route::group(['middleware'=>['auth','CheckLevel:petugas']], function(){
    Route::get('/vPengunjung', [App\Http\Controllers\PetugasController::class, 'vPengunjung' ])->name('v_pengunjung');

    Route::get('/vPeminjaman', [App\Http\Controllers\PetugasController::class, 'vPeminjaman' ])->name('v_peminjaman');

    Route::get('/vPengembalian', [App\Http\Controllers\PetugasController::class, 'vPengembalian' ])->name('v_pengembalian');

    Route::get('/vPerpanjangan', [App\Http\Controllers\PetugasController::class, 'vPerpanjangan' ])->name('v_perpanjangan');

    Route::get('/vDatabuku', [App\Http\Controllers\PetugasController::class, 'vDatabuku' ])->name('v_databuku');

    Route::get('/vDaftarbuku', [App\Http\Controllers\PetugasController::class, 'vDaftarbuku' ])->name('v_daftarbuku');

    Route::get('/profilePetugas', [App\Http\Controllers\PetugasController::class, 'profilePetugas' ])->name('profilePetugas');
    

});

Route::group(['middleware'=>['auth','CheckLevel:pengunjung']], function(){
    Route::get('/pinjam', [App\Http\Controllers\PengunjungController::class, 'index' ])->name('pinjam');
    Route::get('/profile-pengunjung', [App\Http\Controllers\PengunjungController::class, 'profilePengunjung' ])->name('profile-pengunjung');
    Route::get('/loanhistory-pengunjung', [App\Http\Controllers\PengunjungController::class, 'loanHistory' ])->name('loanhistory-pengunjung');

});




