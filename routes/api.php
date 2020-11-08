<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Area;
use App\Competition;
use App\Season;
use App\Round;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/areas', function(){
    return Area::all();
});

Route::get('/competitions', function(){
    return Competition::all();
});

Route::get('/seasons', function(){
    return Season::all();
});

Route::get('/rounds', function(){
    return Round::all();
});
