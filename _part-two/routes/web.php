<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/main', 'MainController@index');
Route::get('/about', 'AboutController@index');
Route::get('/index', 'CarListController@index');
Route::get('/submit', 'SubmitController@submit')->name('submit');
