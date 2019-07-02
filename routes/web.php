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

use Illuminate\Support\Facades\Route;

// Route::any('/', function () {
//       return view('login');
// });

Route::any('/', 'MainController@index');
Route::any('/home', 'MainController@create');
Route::any('/home', 'MainController@home');
Route::any('/superadmin', 'MainController@createadmin');
Route::post('superadmin/index', 'AjaxController@index');
