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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware('two_factor_auth')->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
});

Route::get('/2fa', 'TwoFactorController@show2faForm');
Route::post('/2fa', 'TwoFactorController@verifyToken');
