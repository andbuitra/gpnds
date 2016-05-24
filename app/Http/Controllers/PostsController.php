<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Post as Post;
use App\Models\User as User;

use App\Models\Post_Usuario as Post_User;

class PostsController extends Controller
{

    public function registrarEntrada(){
      $title = request()->input('title');
      $body = request()->input('body');
      $tags = request()->input('tags');
      $profileID = request()->input('profileID');
      Post::create([
        'title' => $title,
        'body' => $body,
        'tags' => $tags
      ]);
      $last_post = Post::all()->last()->id;
      Post_User::create([
        'id_post' => $last_post,
        'profileID' => $profileID
      ]);
      return view('posts.new-post');
    }

    public function showNewPostForm()
    {
      return view('posts.new-post');
    }
}
