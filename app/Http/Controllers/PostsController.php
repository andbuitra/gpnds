<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;

use App\Models\Post as Post;
use App\Models\User as User;
use App\Models\Comments as Comment;

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
}
