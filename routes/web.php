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
Route::view('/vision','vision')->name('vision');
Route::view('/home','home')->name('home');
Route::view('/mision','mision')->name('mision');
Route::view('/demo','demo')->name('demo');
Route::view('/comprar','comprar')->name('comprar');
