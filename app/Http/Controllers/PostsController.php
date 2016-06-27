<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\Http\Response;

use App\Models\Post as Post;
use App\Models\User as User;
use App\Models\Like as Like;
use DB;

class PostsController extends Controller
{

  # Saves the post after the admins request
  public function registrarEntrada(){

    # Retrieves the data sent by the user
    $title = request()->input('title');
    $body = request()->input('body');
    $tags = request()->input('tags');
    $user_id = request()->input('user_id');
    $slug = str_slug($title);

    # Stores the model
    Post::create([
      'title' => $title,
      'body' => $body,
      'tags' => $tags,
      'slug' => $slug,
      'user_id' => $user_id
    ]);

    // # Redirects to the created post
    return redirect('blog/'.$slug);
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

  public function showNewPostForm()
  {
    return view('posts.new-post');
  }

  # Checks if the logged user has already like the current post
  public function hasHeAlreadyLikedThisPost()
  {
    # Checks for the AJAX call
    if(request()->ajax()){
      # Finds the post where the call is coming from
      $post = Post::where('slug', '=', request()->input('slug'))->first();
      $post_id = $post->post_id;

      # Check if a Like already exists in that post with that user and return the "display" order
      if(Like::where(['user_id' => request()->input('user_id'), 'post_id' => $post_id])->count() > 0){
        return response()->json(['display' => true, 'user_id' => request()->input('user_id'), 'post_id' => $post_id]);
      }else{
        return response()->json(['display' => false]);
      }
    }
  }

  # Creates a new like
  public function addLike()
  {

    # Cheks for the AJAX call
    if(request()->ajax()){

      # Retrieves the data from the AJAX call
      $slug = request()->input('slug');
      $user_id = request()->input('user_id');

      # Gets the Post where the call is coming from
      $post = Post::where('slug', '=', $slug)->first();

      # Stores the like
      $like = Like::create(array(
        'user_id' => $user_id,
        'post_id' => $post->post_id
      ));

      if($like){
        return response()->json(['display' => true]);
      }else{
        return response()->json(['display' => false]);
      }
    }

  }

  # Remove a like from the DB
  public function dislike()
  {
    # Checks for the AJAX call
    if(request()->ajax()){

      # Retrieve the data from the AJAX call
      $slug = request()->input('slug');
      $user_id = request()->input('user_id');

      # Finds the post where the call is made from
      $post = Post::where('slug', '=', $slug)->first();
      $post_id = $post->post_id;

      # Finds the Like model and delete it
      $like = DB::table('likes')->where([
        ['user_id', '=', $user_id],
        ['post_id', '=', $post_id]
      ])->delete();



      return response()->json(['display' => false]);
    }
  }
}
