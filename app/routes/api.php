<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

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
Route::get('/movie', 'App\Http\Controllers\MovieController@getAll');
//Route::get('/movie', 'MovieController@getAll');
Route::get('/movie/{id}', 'App\Http\Controllers\MovieController@getById');

Route::post('/movie/create', 'App\Http\Controllers\MovieController@create');

Route::put('/movie/update/{id}', 'App\Http\Controllers\MovieController@update');

Route::delete('/movie/delete/{id}', 'App\Http\Controllers\MovieController@delete');

//movie session
Route::get('/movieplay/{id}', 'App\Http\Controllers\MoviePlayController@getMovieSession');
