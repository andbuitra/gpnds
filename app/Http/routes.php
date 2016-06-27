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
  Route::get('eventos', 'PagesController@eventos');
  Route::get('contacto', 'PagesController@contacto');
  Route::get('galeria', 'PagesController@galeria');
  Route::get('questions', 'PagesController@questions');
  Route::get('library', 'StorageController@listDocsInLibrary');
  Route::get('chatp', 'PagesController@chatp');
  Route::get('tpost', 'PagesController@tpost');
  Route::get('upload', 'StorageController@inicio');
  Route::post('upload', 'StorageController@upload');
  Route::get('download', 'StorageController@inicioDescarga');
  Route::post('download', 'StorageController@download');

  #
  # Info related routes
  #

  Route::get('info/sobre-nosotros', 'InfoPageController@sobreNosotros');
  Route::get('info/puericultura', 'InfoPageController@puericultura');
  Route::get('info/preguntasFrecuentes', 'InfoPageController@preguntasFrecuentes');

  #
  # Blog related routes
  #

  Route::get('blog', 'BlogController@mainBlogList');
  Route::get('blog/all', 'BlogController@listAllPosts');
  Route::get('blog/{slug}', 'BlogController@blogPost');

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
  Route::get('assign-username', 'AuthenticationController@showAssignUsernameForm');
  Route::post('assign-username', 'AuthenticationController@assignUsername');
  Route::get('succesfully-registered', 'AuthenticationController@succesfullyRegistered');
});

#
# Profile management related routes
#

Route::group(['middleware' => ['web', 'auth']], function(){
  Route::get('perfil', 'UserProfileController@me');
  Route::get('perfil/editar', 'UserProfileController@showEditForm');
  Route::post('perfil/editar', 'UserProfileController@saveEdit');
  Route::get('perfil/{username}', 'UserProfileController@show')->where('username', '^[a-z0-9_]{3,15}$');
});

#
# Repository related routes
#

Route::group(['middleware' => ['web', 'auth']], function(){
  Route::get('repositorio', 'StorageController@listDocsInLibrary');
  Route::get('descargar/{filename}', 'StorageController@downloadThis');
  Route::get('subir', 'StorageController@showUploadForm');
  Route::post('subir', 'StorageController@upload');
});

#
# Forum related routes
#

Route::group(['middleware' => ['web', 'auth']], function(){
  Route::get('preguntas', 'ForumController@listQuestions');
  Route::get('pregunta/{slug}', 'ForumController@getQuestion');
  Route::get('nuevo/pregunta', 'ForumController@newQuestion');
  Route::post('nuevo/pregunta', 'ForumController@askQuestion');
  Route::post('nuevo/respuesta', 'ForumController@reply');
});

#
# Post related routes
#

Route::group(['middleware' => 'web', 'auth'], function(){
  Route::post('like', 'PostsController@addLike');
  Route::post('like/alreadyLiked', 'PostsController@hasHeAlreadyLikedThisPost');
  Route::post('dislike', 'PostsController@dislike');
});

Route::group(['middleware' => ['web', 'auth', 'AdminAccess']], function(){
  Route::get('nuevo/post', 'PostsController@showNewPostForm');
  Route::post('nuevo/post', 'PostsController@registrarEntrada');
  Route::post('nuevo/comentario', 'PostsController@registrarComentario');
});

Route::group(['middleware' => ['web', 'auth', 'AdminAccess']], function(){
  Route::get('administrar', 'AdminController@showAdminPanel');
  Route::get('administrar/usuarios', 'AdminController@showUsersPanel');
  Route::get('administrar/usuarios/{user_id}','BansController@panelBaneo');
  Route::post('administrar/banear','BansController@banearPersona');
});

#
# TESTING ROUTES (DELETE WHEN FINISHED)
#

Route::get('createusername', function(){
  return view('pages.createusername');
});
