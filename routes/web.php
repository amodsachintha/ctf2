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
Route::get('/requestlevel5', 'LevelController@requestlevel5');
Route::get('/requestlevel6', 'LevelController@requestlevel6');
Route::get('/requestlevel7', 'LevelController@requestlevel7');
Route::get('/requestlevel8', 'LevelController@requestlevel8');
Route::get('/requestlevel9', 'LevelController@requestlevel9');
Route::get('/requestlevel10', 'LevelController@requestlevel10');
Route::get('/requestlevel11', 'LevelController@requestlevel11');
Route::get('/requestlevel12', 'LevelController@requestlevel12');
Route::get('/requestlevel13', 'LevelController@requestlevel13');
Route::get('/requestlevel14', 'LevelController@requestlevel14');
Route::get('/requestlevel15', 'LevelController@requestlevel15');

Route::post('/searchlevel8', 'LevelController@searchlevel8');


Route::get('/rest', 'LevelController@rest');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');

