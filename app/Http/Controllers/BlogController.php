<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Post;

class BlogController extends Controller
{
    public function mainBlogList()
    {
      $recentPosts = Post::orderBy('created_at', 'desc')->get()->take(4)->toArray();
      #Pending
      $bestPosts = [];
      return view('pages.blog', compact('recentPosts', 'bestPosts'));
    }

    public function blogPost($slug){
      $post = Post::where('slug', '=', $slug)->firstOrFail();

      return view('pages.single-post', compact('post'));
    }

    public function test(){
      return view('pages.single-post');
    }
}
