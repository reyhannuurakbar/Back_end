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

// Route::get('/', function () {
//     return view('signin_temp');
// });

//user
// Route::get('/','RegistrasiController@home');
Route::get('/', 'HomeUserController@HomeUser');
Route::get('/Pesan', 'PesananController@Pesen');
Route::POST('/insertpesanan','PesananController@add');

//admin
Route::get('/admin', 'AdminController@Home');
Route::get('/accepted/{id_pesanan}', 'AdminController@accepted');
Route::get('/deny/{id_pesanan}', 'AdminController@deny');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
