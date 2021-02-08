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

Route::get('/Todos', 'TodosController@index');

Route::get('/create', 'TodosController@create');
Route::post('store-todo', 'TodosController@store');
Route::get('/Todos/{todo}', 'TodosController@show');
Route::get('/ToEdit/{todo}', 'TodosController@showToEdit');
Route::post('/update/{todo}', 'TodosController@update');
Route::get('/delete/{todo}', 'TodosController@delete');