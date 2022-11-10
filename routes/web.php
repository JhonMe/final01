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
    return view('Principal');
});

Route::get('/fotos', function () {
    return view('fotos');
});

Route::get('/ubicaciones', function () {
    return view('ubicaciones');
});
Route::get('/boleto', function () {
    return view('boleto');
});
Route::get('/estandar', function () {
    return view('estandar');
});
Route::get('/premiun', function () {
    return view('premiun');
});
Route::get('/vip', function () {
    return view('vip');
});
