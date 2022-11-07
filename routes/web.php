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
Route::get('/viajes', function () {
    return view('viajes');
});
Route::get('/fotos', function () {
    return view('fotos');
});
Route::get('/recomendados', function () {
    return view('recomendados');
});
Route::get('/ubicaciones', function () {
    return view('ubicaciones');
});
