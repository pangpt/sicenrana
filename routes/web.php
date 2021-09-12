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

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/layanan', function () {
//     return view('layanan');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });

Route::get('/', 'HomeController@index')->name('homepage');
Route::get('/profil', 'HomeController@profil')->name('profil');
Route::get('/artikel', 'HomeController@artikel')->name('artikel');
Route::get('/galeri', 'HomeController@galeri')->name('galeri');
Route::get('/kontak', 'HomeController@kontak')->name('kontak');
Route::get('/layanan', 'HomeController@layanan')->name('layanan');
Route::get('/survey', 'HomeController@survey')->name('survey');
Route::get('/struktur-organisasi', 'HomeController@struktur')->name('struktur');
