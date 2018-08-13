<?php

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




Route::get('/requestlevel0', 'LevelController@requestlevel0');
Route::get('/requestlevel1', 'LevelController@requestlevel1');
Route::get('/requestlevel2', 'LevelController@requestlevel2');
Route::get('/requestlevel3', 'LevelController@requestlevel3');
Route::get('/requestlevel4', 'LevelController@requestlevel4');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');

