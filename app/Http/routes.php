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
  Route::get('questions', 'PagesController@questions');
  Route::get('library', 'PagesController@library');
  Route::get('chatp', 'PagesController@chatp');
  Route::get('tpost', 'PagesController@tpost');

  #
  # Blog related routes
  #

  Route::get('blog', 'BlogController@mainBlogList');
  Route::get('blog/{slug}', 'BlogController@blogPost');
  # Only for testing
  Route::get('blog/post/{id}', 'BlogController@test');

  #
  # Authentication related routes
  #
  Route::get('iniciar-sesion', 'AuthenticationController@showLoginForm');
  Route::post('iniciar-sesion', 'AuthenticationController@login');
  Route::get('logout', 'AuthenticationController@logout');

  #
  # Register related routes
  #

  Route::get('registro', 'AuthenticationController@showRegistrationForm');
  Route::post('registro', 'AuthenticationController@register');
  Route::get('registro/verify/{confirmationCode}', [
    'as' => 'confirmation_path',
    'uses' => 'AuthenticationController@confirm'
  ]);
});

#
# Profile management related routes
#

Route::group(['middleware' => ['web', 'auth']], function(){
  Route::get('perfil', 'UserProfileController@me');
  Route::get('perfil/editar', 'UserProfileController@showEditForm');
  Route::get('perfil/{id}', 'UserProfileController@show')->where('id', '[0-9]+');
});

#
# Post related routes
#

Route::group(['middleware' => ['web', 'auth', 'AdminAccess']], function(){
  Route::get('nuevo/post', 'PostsController@showNewPostForm');
  Route::post('nuevo/post', 'PostsController@registrarEntrada');
});

#
# TESTING ROUTES (DELETE WHEN FINISHED)
#

Route::get('profileTest', function(){
  return view('pages.profile');
});
