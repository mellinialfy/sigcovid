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
//     return view('welcome');
// });

Route::resource('/', 'PositifController');
Route::get('/data/tambah', 'PositifController@create');
Route::post('/data/store', 'PositifController@store');
Route::get('/data/edit/{id}', 'PositifController@edit');
Route::put('/data/update/{id}', 'PositifController@update');
Route::get('/data/hapus/{id}', 'PositifController@destroy');

Route::get('/data/getDataMap', 'PositifController@getDataMap');
// Route::get('/data/getPositif', 'PositifController@getPositif');
Route::get('/create-pallete','PositifController@createPallette');