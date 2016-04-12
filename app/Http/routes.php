<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PagesController@inicio');

Route::get('sobre-nosotros', 'PagesController@sobreNosotros');

Route::get('eventos', 'PagesController@eventos');

Route::get('contacto', 'PagesController@contacto');

Route::get('blog', 'PagesController@blog');

Route::get('iniciar-sesion', 'PagesController@login');

Route::get('registro', 'PagesController@registro');

Route::auth();

Route::get('me', 'PagesController@me');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/



Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
