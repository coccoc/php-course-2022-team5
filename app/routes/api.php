<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//ticket
Route::get('/ticket', 'TicketController@getAll');
//check-later
//Route::get('/ticket/create', 'TicketController@create');
//Route::get('/ticket/update/{id}', 'TicketController@update');
//Route::get('/ticket/delete/{id}', 'TicketController@delete');

//movie
Route::get('/movie', 'App\Http\Controllers\MovieController@getAll');
Route::get('/movie/{id}', 'App\Http\Controllers\MovieController@getById');

Route::post('/movie/create', 'App\Http\Controllers\MovieController@create');

Route::put('/movie/update/{id}', 'App\Http\Controllers\MovieController@update');

Route::delete('/movie/delete/{id}', 'App\Http\Controllers\MovieController@delete');

//movie session
Route::get('/movieplay/{id}', 'App\Http\Controllers\MoviePlayController@getMovieSession');
