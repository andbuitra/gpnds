<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Post;
use DB;

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

      $post_id = $post->post_id;

      $comments = DB::table('comments')->select('body', 'user_id', 'created_at')->where('post_id', '=', $post_id)->get();
      
      return view('pages.single-post', compact('post', 'comments'));
    }

    public function test(){
      return view('pages.single-post');
    }
}
