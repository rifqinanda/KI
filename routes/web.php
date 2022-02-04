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

// Route::resource('/', '');
Route::resource('/users', 'App\Http\Controllers\UserController');

/**
* Show Todo Dashboard
*/

Route::get('/', 'App\Http\Controllers\TodoController@index');

/**
 *  Show create todo form
 */
Route::get('/todos/create', 'App\Http\Controllers\TodoController@create');

/**
 * Add Todo
 */
Route::post('/todos','App\Http\Controllers\TodoController@store');

/**
 * Show edit todo
 */
Route::get('todos/{todo}/edit', 'App\Http\Controllers\TodoController@edit');

/**
 * update todo
 */
Route::patch('todos/{todo}', 'App\Http\Controllers\TodoController@update');

/**
 * Delete Todo
 */
Route::get('/todos/{todo}/delete', 'App\Http\Controllers\TodoController@delete');