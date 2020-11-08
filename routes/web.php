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

Route::get('/', 'MainController@index');
Route::get('/save', 'MainController@store');


Route::get('/areas', 'AreasController@index');
Route::get('/areas/{id}', 'AreasController@show');
Route::get('/areas/save', 'AreasController@store');

Route::get('/competitions', 'CompetitionsController@index');
Route::get('/competitions/{id}', 'CompetitionsController@show');
Route::get('/competitions/save', 'CompetitionsController@store');

Route::get('/seasons', 'SeasonsController@index');
Route::get('/seasons/{id}', 'SeasonsController@show');
Route::get('/seasons/save', 'SeasonsController@store');

Route::get('/rounds', 'RoundsController@index');
Route::get('/rounds/{id}', 'RoundsController@show');
Route::get('/rounds/save', 'RoundsController@store');

Route::get('/teams', 'TeamsController@index');
Route::get('/teams/{id}', 'TeamsController@show');
Route::get('/teams/save', 'TeamsController@store');

Route::get('/players', 'PlayersController@index');
Route::get('/players/{id}', 'PlayersController@show');
Route::get('/players/save', 'PlayersController@store');