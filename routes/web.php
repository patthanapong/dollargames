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
    return view('index');
});
Route::resource('dolladeposit', 'DepositController');
Route::resource('dollawithdraw', 'Withdrawcontroller');

Route::get('login','AuthController@getlogin')->name('login');
Route::post('login','AuthController@postlogin');
Route::get('logout','AuthController@logout');
