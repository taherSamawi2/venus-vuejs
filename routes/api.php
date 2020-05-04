<?php

use Illuminate\Http\Request;

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


Route::get('/a', 'HomeController@index');
Route::group(['prefix' => 'api'], function () {
});

// List projects
Route::get('/projects', 'HomeController@index');
// List single project
Route::get('/project/{id}', 'HomeController@show');
// Create new project
Route::post('/project', 'HomeController@store');
// Update project
Route::put('/project/{id}', 'HomeController@update');
// Delete project
Route::delete('/project/{id}', 'HomeController@destory');
