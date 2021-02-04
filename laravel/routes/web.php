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

Route::get('/emp-index', 'MainController@empIndex') -> name('emp-index');

Route::get('/task-index', 'MainController@taskIndex') -> name('task-index');

Route::get('/emp-show/{id}', 'MainController@empShow') -> name('emp-show');

Route::get('/task-show/{id}', 'MainController@taskShow') -> name('task-show');

Route::get('/emp-create', 'MainController@empCreate') -> name('emp-create');

Route::post('/emp-store', 'MainController@empStore') -> name('emp-store');
