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

    public function blogPost($id){
      $post = Post::findOrFail($id);

      return view('pages.single-post', compact('post'));
    }
}
