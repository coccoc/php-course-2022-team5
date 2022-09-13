<?php
namespace App\Http\Controllers;
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
Route::post('/login', 'App\Http\Controllers\LoginController@login');
Route::post('/register', 'App\Http\Controllers\RegisterController@register');

//ticket
Route::get('/ticket', 'TicketController@getAll');
Route::post('/ticket/create', 'TicketController@create');
Route::put('/ticket/update/{id}', 'TicketController@update');
Route::put('/ticket/update/bulk/{row}', 'TicketController@updateBulk');
Route::delete('/ticket/delete/{id}', 'TicketController@delete');
// Add "App\Http\Controllers\" to path if error 500 cannot find class

//movie
Route::get('/movie', 'MovieController@getAll');
//Route::get('/movie', 'MovieController@getAll');
Route::get('/movie/{id}', 'MovieController@getById');
Route::post('/movie/create', 'MovieController@create');
Route::put('/movie/update/{id}', 'MovieController@update');
Route::delete('/movie/delete/{id}', 'MovieController@delete');

//movie session
Route::get('/movie-play/{id}', 'MoviePlayController@getMovieSession');
Route::post('/movie-play/create', 'MoviePlayController@createMovieSession');
Route::put('/movie-play/update/{id}', 'MoviePlayController@updateMovieSession');
Route::delete('/movie-play/delete/{id}', 'MoviePlayController@deleteMovieSession');

//reservation
Route::get('/booking/{userId}', 'ReservationController@getByUserId');
Route::post('/booking/{userId}/submit', 'ReservationController@create');
Route::delete('/booking/{userId}/cancel', 'ReservationController@delete');

//hall
Route::get('/hall', 'HallController@getAll');
Route::get('/hall/{id}', 'HallController@getById');
Route::post('/hall/create', 'HallController@create');
Route::put('/hall/update/{id}', 'HallController@update');
Route::delete('/hall/delete/{id}', 'HallController@delete');
