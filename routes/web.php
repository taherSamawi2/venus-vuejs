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

//Auth::routes();

Route::get('dashboard/{any}', function () {
    return view('dashboard');
})->where('any', '.*');

Route::get('{any}', function () {
    return view('home');
})->where('any', '.*');


Route::get('getAllProjects','HomeController@getAllProjects');
Route::get('getAllClients','HomeController@getAllClients');
Route::get('/project/{project}', 'HomeController@show');
