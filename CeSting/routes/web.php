<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\PenggunaController;

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
    return view('home');
});
Route::get('/register', function () {
    return view('registerlogin/register');
});
Route::get('/login', function () {
    return view('registerlogin/login');
});
Route::get('/profil', function () {
    return view('profil/profil');
});
Route::get('/profil_anak', function () {
    return view('profil/profil_anak');
});
Route::resource('/artikel', ArtikelController::class);
Route::resource('/pengguna', PenggunaController::class);