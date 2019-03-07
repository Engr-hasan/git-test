<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('index',"crudController@index");
Route::get('jquery',"crudController@getJquery");