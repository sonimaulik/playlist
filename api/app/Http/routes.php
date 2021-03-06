<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/addtrack','PlayListController@addtrack');
Route::post('/addgenere','PlayListController@addgenere');
Route::post('/editedtrack','PlayListController@editedtrack');
Route::post('/delgenere','PlayListController@delgenere');

Route::get('/gettracklist','PlayListController@gettracklist');
Route::get('/getgeneres','PlayListController@getgeneres');
