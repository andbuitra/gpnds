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

  Route::get('/', 'PagesController@inicio');

  Route::get('sobre-nosotros', 'PagesController@sobreNosotros');

  Route::get('puericultura', 'PagesController@puericultura');

  Route::get('eventos', 'PagesController@eventos');

  Route::get('contacto', 'PagesController@contacto');

  Route::get('iniciar-sesion', 'PagesController@login');

  Route::get('galeria', 'PagesController@galeria');

  Route::get('profile', 'PagesController@profile');

  Route::get('questions', 'PagesController@questions');

  Route::get('library', 'PagesController@library');

  Route::get('chatp', 'PagesController@chatp');

  Route::get('tpost', 'PagesController@tpost');

  #
  # Blog related routes
  #
  
  Route::get('blog', 'BlogController@mainBlogList');
  Route::get('blog/{id}', 'BlogController@blogPost');
  # Only for testing
  Route::get('blog/post/{id}', 'BlogController@test');

  //Login Routes
  Route::get('iniciar-sesion', 'AuthenticationController@showLoginForm');

  Route::post('iniciar-sesion', 'AuthenticationController@login');

  Route::get('logout', 'AuthenticationController@logout');

  //Register Routes
  Route::get('registro', 'AuthenticationController@showRegistrationForm');

  Route::post('registro', 'AuthenticationController@register');

  //Verification by email routes
  Route::get('registro/verify/{confirmationCode}', [
      'as' => 'confirmation_path',
      'uses' => 'AuthenticationController@confirm'
    ]);
  });

  Route::group(['middleware' => ['web', 'auth']], function(){
    Route::get('profile', 'UserProfileController@me');
    Route::get('profile/edit', 'UserProfileController@showEditForm');
    Route::get('profile/{id}', 'UserProfileController@show')->where('id', '[0-9]+');
  });

  Route::group(['middleware' => ['web', 'auth', 'AdminAccess']], function(){
    Route::get('new/post', 'PostsController@showNewPostForm');

    Route::post('new/post', 'PostsController@registrarEntrada');
  });
