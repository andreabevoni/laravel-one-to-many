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

Route::get('/', 'MainController@home') -> name('home');

// EMPLOYEES
Route::get('/emp-index', 'MainController@empIndex') -> name('emp-index');
Route::get('/emp-show/{id}', 'MainController@empShow') -> name('emp-show');
Route::get('/emp-create', 'MainController@empCreate') -> name('emp-create');
Route::post('/emp-store', 'MainController@empStore') -> name('emp-store');
Route::get('/emp-edit/{id}', 'MainController@empEdit') -> name('emp-edit');
Route::post('/emp-update/{id}', 'MainController@empUpdate') -> name('emp-update');

// TASKS
Route::get('/task-index', 'MainController@taskIndex') -> name('task-index');
Route::get('/task-show/{id}', 'MainController@taskShow') -> name('task-show');
Route::get('/task-create', 'MainController@taskCreate') -> name('task-create');
Route::post('/task-store', 'MainController@taskStore') -> name('task-store');
Route::get('/task-edit/{id}', 'MainController@taskEdit') -> name('task-edit');
Route::post('/task-update/{id}', 'MainController@taskUpdate') -> name('task-update');

// TYPOLOGIES
Route::get('/typo-index', 'MainController@typoIndex') -> name('typo-index');
Route::get('/typo-show/{id}', 'MainController@typoShow') -> name('typo-show');
Route::get('/typo-create', 'MainController@typoCreate') -> name('typo-create');
Route::post('/typo-store', 'MainController@typoStore') -> name('typo-store');
Route::get('/typo-edit/{id}', 'MainController@typoEdit') -> name('typo-edit');
Route::post('/typo-update/{id}', 'MainController@typoUpdate') -> name('typo-update');
