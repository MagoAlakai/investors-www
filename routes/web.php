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

//MAIN SPA
Route::get('/', function () {
    return view('pages.main');
});

//External legal pages
Route::get('/terms&conditions', function () {
    return view('pages.terms');
});

Route::get('/privacy-policy', function () {
    return view('pages.privacy');
});

Route::get('/cookie-consent', function () {
    return view('pages.cookie');
});

Route::get('/GDRP', function () {
    return view('pages.rights');
});
