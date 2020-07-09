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

Route::get('/q1', 'Q1Controller@index');
Route::get('/q2', 'Q2Controller@index');
Route::get('/q3', 'Q3Controller@index');
Route::get('/q4', 'Q4Controller@index');

Route::get('/q4/getWeatherInfo/{id}', 'Q4Controller@getWeatherInfo');
