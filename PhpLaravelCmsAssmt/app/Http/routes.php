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

//Route::group(['middleware' => 'web'], function() {
Route::get('/', 'SiteController@welcome');
Route::get('/home', function () {
    return view('welcome2');
});
    Route::auth();


    Route::get('/admin', 'HomeController@index');

    Route::resource('/pages','PagesController');

    Route::resource('/articles','ArticlesController');

    Route::resource('/contentareas','ContentAreasController');

    Route::resource('/csstemplates','CssTemplatesController');

    Route::resource('/users','UsersController');

    //Route::get('/users','UsersController@index');

//});

