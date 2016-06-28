<?php

namespace App\AccessPoints;

use App\Models\Post as PostM;
use App\Models\Like as LikeM;
use Auth;
use DB;

class Post {

  public static function newPost(){
    # Retrieves the data sent by the user
    $title = request()->input('title');
    $body = request()->input('body');
    $tags = request()->input('tags');
    $user_id = request()->input('user_id');
    $slug = str_slug($title);

    # Stores the model
    PostM::create([
      'title' => $title,
      'body' => $body,
      'tags' => $tags,
      'slug' => $slug,
      'user_id' => $user_id
    ]);

    if(!is_null(PostM::where('slug', '=', $slug)->first())){
      return true;
    }

    return false;

  }

  public static function hasHeAlreadyLikeThisPost(){
    # Checks for the AJAX call
    if(request()->ajax()){
      # Finds the post where the call is coming from
      $post = PostM::where('slug', '=', request()->input('slug'))->first();
      $post_id = $post->post_id;

      # Check if a Like already exists in that post with that user and return the "display" order
      if(LikeM::where(['user_id' => request()->input('user_id'), 'post_id' => $post_id])->count() > 0){
        return response()->json(['display' => true, 'user_id' => request()->input('user_id'), 'post_id' => $post_id]);
      }else{
        return response()->json(['display' => false]);
      }
    }
    abort(404);
  }

  public static function addLike(){
    # Cheks for the AJAX call
    if(request()->ajax()){

      # Retrieves the data from the AJAX call
      $slug = request()->input('slug');
      $user_id = request()->input('user_id');

      # Gets the Post where the call is coming from
      $post = PostM::where('slug', '=', $slug)->first();

      # Stores the like
      $like = LikeM::create(array(
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

  public static function dislike(){

    # Checks for the AJAX call
    if(request()->ajax()){

      # Retrieve the data from the AJAX call
      $slug = request()->input('slug');
      $user_id = request()->input('user_id');

      # Finds the post where the call is made from
      $post = PostM::where('slug', '=', $slug)->first();
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
