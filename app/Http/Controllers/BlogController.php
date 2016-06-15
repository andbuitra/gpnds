<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Post;
use App\Models\User;
use DB;

class BlogController extends Controller
{
    public function mainBlogList()
    {
      $recentPosts = Post::orderBy('created_at', 'desc')->get()->take(4)->toArray();
      $mostLikedPostsQuery = DB::select('
        SELECT posts.post_id, COUNT( posts.post_id ) AS PostIdCounter2
        FROM posts
        JOIN likes ON posts.post_id = likes.post_id
        GROUP BY posts.post_id
        ORDER BY PostIdCounter2 DESC
        LIMIT 0 , 3
      ');
      $currentPost;
      $mostLikedPosts = array();
      foreach($mostLikedPostsQuery As $post){
        $currentPost = DB::table('posts')->where('post_id', $post->post_id)->get();
        $post2 = $currentPost[0];
        array_push($mostLikedPosts, $post2);
      }

      return view('pages.blog', compact('recentPosts', 'mostLikedPosts'));
    }

    public function blogPost($slug){
      $post = Post::where('slug', '=', $slug)->firstOrFail();

      $post_id = $post->post_id;

      return view('pages.single-post', compact('post'));
    }

    public function test(){

      $mostLikedPostsQuery = DB::select('
        SELECT posts.post_id, COUNT( posts.post_id ) AS PostIdCounter2
        FROM posts
        JOIN likes ON posts.post_id = likes.post_id
        GROUP BY posts.post_id
        ORDER BY PostIdCounter2 DESC
        LIMIT 0 , 4
      ');
      $currentPost;
      $mostLikedPosts = array();
      foreach($mostLikedPostsQuery As $post){
        $currentPost = DB::table('posts')->where('post_id', $post->post_id)->get();
        $post2 = $currentPost[0];
        array_push($mostLikedPosts, $post2);
      }

      dd($mostLikedPosts);
    }

    public function listAllPosts()
    {
      $posts = Post::paginate(4);
      return view('pages.blogList', compact('posts'));
    }
}
