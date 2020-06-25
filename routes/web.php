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

Auth::routes();

Route::get('/', 'DefaultController@index');
Route::get('/about', 'DefaultController@about');
Route::get('/dashboard', 'Backend\DashboardController@index')->name('dashboard');
Route::get('/profile/edit', 'Backend\DashboardController@profileEdit')->name('profile.edit');
Route::get('/profile/update', 'Backend\DashboardController@update')->name('profile.update');
