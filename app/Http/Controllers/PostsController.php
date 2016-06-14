<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\Http\Response;

use App\Models\Post as Post;
use App\Models\User as User;

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
      $slug = request()->input('slug');
      $user_id = request()->input('user_id');

      $post = Post::where('slug', '=', $slug)->first();
      $post_id = $post->post_id;
      $like = Like::where(['user_id' => $user_id, 'post_id' => $post_id]);
      if($like == null){
        return response()->json(['success' => false, 'data' => false]);
      }
        return response()->json(['success' => true, 'data' => false]);
    }

    public function addLike()
    {
      $slug = request()->input('slug');
      $user_id = request()->input('user_id');

      $post = Post::where('slug', '=', $slug)->first();

      $like = Like::create(array(
        'user_id' => $user_id,
        'post_id' => $post->post_id
      ));

      if($like){
        return Response::json(array(
          'success' => true,
          'data'   => true
        ));
      }else{
        return Response::json(array(
          'success' => true,
          'data'   => false
        ));
      }
    }

    public function dislike()
    {
      $slug = request()->input('slug');
      $user_id = request()->input('user_id');

      $post = Post::where('slug', '=', $slug)->first();

      $like = Like::find([$user_id, $post_id]);
      $like->destroy;

      return Response::json(array(
        'success' => true,
        'data'   => true
      ));
    }
}
