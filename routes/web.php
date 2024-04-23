<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
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
Auth::routes();
/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
//Middleware User dengan type user(0)
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
/*------------------------------------------
--------------------------------------------
All Superadmin Routes List
--------------------------------------------
--------------------------------------------*/
//Middleware User dengan type superadmin(1)
Route::middleware(['auth', 'user-access:superadmin'])->group(function () {
    Route::get('/superadmin/home', [
        HomeController::class,
        'superadminHome'
    ])->name('superadmin.home');
});
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
//Middleware User dengan type admin(2)
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/home', [
        HomeController::class,
        'adminHome'
    ])->name('admin.home');
});
/*------------------------------------------
--------------------------------------------
All Dosen Routes List
--------------------------------------------
--------------------------------------------*/
//Middleware User dengan type dosen(3)
Route::middleware(['auth', 'user-access:dosen'])->group(function () {
    Route::get('/dosen/home', [
        HomeController::class,
        'dosenHome'
    ])->name('dosen.home');
});
/*------------------------------------------
--------------------------------------------
All Mahasiswa Routes List
--------------------------------------------
--------------------------------------------*/
//Middleware User dengan type mahasiswa(4)
Route::middleware(['auth', 'user-access:mahasiswa'])->group(function () {
    Route::get('/mahasiswa/home', [
        HomeController::class,
        'mahasiswaHome'
    ])->name('mahasiswa.home');
});
/*------------------------------------------
--------------------------------------------
All Tendik Routes List
--------------------------------------------
--------------------------------------------*/
//Middleware User dengan type tendik(5)
Route::middleware(['auth', 'user-access:tendik'])->group(function () {
    Route::get('/tendik/home', [
        HomeController::class,
        'tendikHome'
    ])->name('tendik.home');
});
/*------------------------------------------
--------------------------------------------
All Admin Keuangan Routes List
--------------------------------------------
--------------------------------------------*/
//Middleware User dengan type adminakademik(6)
Route::middleware(['auth', 'user-access:adminakademik'])->group(function () {
    Route::get('/adminakademik/home', [
        HomeController::class,
        'adminakademikHome'
    ])->name('adminakademik.home');
});
/*------------------------------------------
--------------------------------------------
All Admin Keuangan Routes List
--------------------------------------------
--------------------------------------------*/
//Middleware User dengan type adminkeuangan(7)
Route::middleware(['auth', 'user-access:adminkeuangan'])->group(function () {
    Route::get('/adminkeuangan/home', [
        HomeController::class,
        'adminkeuanganHome'
    ])->name('adminkeuangan.home');
});
/*------------------------------------------
--------------------------------------------
All Direktur Routes List
--------------------------------------------
--------------------------------------------*/
//Middleware User dengan type direktur(8)
Route::middleware(['auth', 'user-access:direktur'])->group(function () {
    Route::get('/direktur/home', [
        HomeController::class,
        'direkturHome'
    ])->name('direktur.home');
});
/*------------------------------------------
--------------------------------------------
All Wakil Direktur 1 Routes List
--------------------------------------------
--------------------------------------------*/
//Middleware User dengan type wakildirektur1(9)
Route::middleware(['auth', 'user-access:wakildirektur1'])->group(function () {
    Route::get('/wakildirektur1/home', [
        HomeController::class,
        'wakildirektur1Home'
    ])->name('wakildirektur1.home');
});
/*------------------------------------------
--------------------------------------------
All Wakil Direktur 2 Routes List
--------------------------------------------
--------------------------------------------*/
//Middleware User dengan type wakildirektur2(10)
Route::middleware(['auth', 'user-access:wakildirektur2'])->group(function () {
    Route::get('/wakildirektur2/home', [
        HomeController::class,
        'wakildirektur2Home'
    ])->name('wakildirektur2.home');
});
/*------------------------------------------
--------------------------------------------
All Wakil Direktur 3 Routes List
--------------------------------------------
--------------------------------------------*/
//Middleware User dengan type wakildirektur3(11)
Route::middleware(['auth', 'user-access:wakildirektur3'])->group(function () {
    Route::get('/wakildirektur3/home', [
        HomeController::class,
        'wakildirektur3Home'
    ])->name('wakildirektur3.home');
});
/*------------------------------------------
--------------------------------------------
All Admin LPPM Routes List
--------------------------------------------
--------------------------------------------*/
//Middleware User dengan type adminlppm(12)
Route::middleware(['auth', 'user-access:adminlppm'])->group(function () {
    Route::get('/adminlppm/home', [
        HomeController::class,
        'adminlppmHome'
    ])->name('adminlppm.home');
});
/*------------------------------------------
--------------------------------------------
All Admin SDM Routes List
--------------------------------------------
--------------------------------------------*/
//Middleware User dengan type adminsdm(13)
Route::middleware(['auth', 'user-access:adminsdm'])->group(function () {
    Route::get('/adminsdm/home', [
        HomeController::class,
        'adminsdmHome'
    ])->name('adminsdm.home');
});
