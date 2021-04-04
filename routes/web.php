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

Route::get('/', 'DashboardController@index')->name('home');
Route::get('/dashboard', 'DashboardController@index')->name('dashboards-home');
Route::get('/other_details', 'DashboardController@other')->name('dashboards-other');
Route::get('/support', 'DashboardController@support')->name('support');
Route::match(['get', 'post'], '/botman', 'BotManController@handle');
