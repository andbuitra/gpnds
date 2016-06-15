<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\Http\Response;

use App\Models\Post as Post;
use App\Models\User as User;
use App\Models\Like as Like;

class PostsController extends Controller
{
    # TODO agregar la función del slug
    public function registrarEntrada(){
      $title = request()->input('title');
      $body = request()->input('body');
      $tags = request()->input('tags');
      $user_id = request()->input('user_id');
      Post::create([
        'title' => $title,
        'body' => $body,
        'tags' => $tags,
        'slug' => str_slug($title),
        'user_id' => $user_id
      ]);
      return view('posts.new-post');
    }

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

    public function hasHeAlreadyLikedThisPost()
    {
      if(request()->ajax()){
          $post = Post::where('slug', '=', request()->input('slug'))->first();
          $post_id = $post->post_id;
          $like = Like::where(['user_id' => request()->input('user_id'), 'post_id' => $post_id])->first();
          if($like != null){
            return response()->json(['display' => true]);
          }else{
            return response()->json(['display' => false]);
          }
      }
    }

    public function addLike()
    {
      if(request()->ajax()){
        $slug = request()->input('slug');
        $user_id = request()->input('user_id');

        $post = Post::where('slug', '=', $slug)->first();

        $like = Like::create(array(
          'user_id' => $user_id,
          'post_id' => $post->post_id
        ));

        if($like->exists){
          return response()->json(['display' => true]);
        }else{
          return response()->json(['display' => false]);
        }
      }

    }

    public function dislike()
    {
      $slug = request()->input('slug');
      $user_id = request()->input('user_id');
      $post = Post::where('slug', '=', $slug)->first();
      $like = Like::where(['post_id' => $post->post_id, 'user_id' => $user_id])->first();
      $like->destroy();
      return response()->json(['display' => false]);
    }
}
