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


Route::get('/', '\App\Http\Controllers\GbooksController@home');
Route::get('/home', '\App\Http\Controllers\GbooksController@home');

Route::get('/pesquisar',['as'=>'pesquisar','uses'=>'\App\Http\Controllers\GbooksController@search']);
Route::post('/pesquisar',['as'=>'pesquisar','uses'=>'\App\Http\Controllers\GbooksController@search']);
Route::get('/favorito', '\App\Http\Controllers\GbooksController@search');
