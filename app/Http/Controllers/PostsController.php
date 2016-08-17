<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\Http\Response;

use App\Models\Post as Post;
use App\Models\User as User;
use App\Models\Like as Like;
use App\AccessPoints\Post as PostAP;
use DB;

class PostsController extends Controller
{

  # Saves the post after the admins request
  public function registrarEntrada(){

    if(PostAP::newPost()){
      return redirect('blog/'.$slug);
    }
    abort(500, 'No se pudo procesar su solicitud');
  }

  # FEATURE WITHOUT CURRENT USE

  public function registrarComentario(){
    $body = request()->input('body');
    $user_id = Auth::user()->user_id;
    $post_id = request()->input('post_id');
    $variable = Comment::create([
      'body' => $body,
      'user_id' => $user_id,
      'post_id' => $post_id
    ]);
    return redirect()->back();
  }

  public function showNewPostForm(){
    return view('posts.new-post');
  }

  # Checks if the logged user has already like the current post
  public function hasHeAlreadyLikedThisPost(){
    return PostAP::hasHeAlreadyLikedThisPost();
  }

  # Creates a new like
  public function addLike(){

    return PostAP::addLike();

  }

  # Remove a like from the DB
  public function dislike(){

    return PostAP::dislike();

  }

}
