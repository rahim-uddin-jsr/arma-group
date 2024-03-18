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

Route::get('/', 'FrontendController@index');

// Route::get('/', 'HomeController@index')->name('home')
Route::get('/mission-vision', 'FrontendController@missionVision')->name('mission vision');
Route::get('/our-values', 'FrontendController@ourValues')->name('our values');
Route::get('/our-strength', 'FrontendController@ourStrength')->name('our strength');
Route::get('/chairman-message', 'FrontendController@chairmanMessage')->name('chairman message');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

