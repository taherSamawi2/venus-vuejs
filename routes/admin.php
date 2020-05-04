<?php

Route::group(["prefix"=>"admin","namespace"=>"Admin"],function (){
    Auth::routes();

    Route::get('/',"HomeController@index")->name('admin');



    Route::get('/projects', "ProjectController@index")->name('projects.index');
    Route::get('/projects/create', "ProjectController@create") ->name('project.create');
    Route::post('/projects/store', "ProjectController@store")->name('project.store');
    Route::get('/projects/{project}', "ProjectController@show")->name('project.show');
    Route::get('/projects/{project}/edit', "ProjectController@edit")->name('project.edit');
    Route::put('/projects/{project}', "ProjectController@update")->name('project.update');
    Route::delete('/projects/{project}', "ProjectController@delete")->name('project.delete');


    Route::get('/clients', "ClientController@index")->name('clients.index');
    Route::get('/clients/create', "ClientController@create")->name('client.create');
    Route::post('/clients/store', "ClientController@store")->name('client.store');
    Route::get('/clients/{client}', "ClientController@show")->name('client.show');
    Route::get('/clients/{client}/edit', "ClientController@edit")->name('client.edit');
    Route::put('/clients/{client}', "ClientController@update")->name('client.update');
    Route::delete('/clients/{client}', "ClientController@delete")->name('client.delete');


    Route::get('/pages', "PageController@index")->name('pages.index');
    Route::get('/pages/create', "PageController@create") ->name('page.create');
    Route::post('/pages/store', "PageController@store")->name('page.store');
    Route::get('/pages/{page}', "PageController@show")->name('page.show');
    Route::get('/pages/{page}/edit',"PageController@edit")->name('page.edit');
    Route::put('/pages/{page}', "PageController@update")->name('page.update');
    Route::delete('/pages/{page}', "PageController@delete")->name('page.delete');

});
