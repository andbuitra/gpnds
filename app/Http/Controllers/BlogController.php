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
    # Gets the 4 more recent posts and save them in an array
    $recentPosts = Post::orderBy('created_at', 'desc')->get()->take(4)->toArray();

    # Gets the 3 most liked posts
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

    # Iterates for each post inside the mostLiked array
    # Retrieve their model from the DB
    # Push them into another array for later usage

    foreach($mostLikedPostsQuery As $post){
      $currentPost = DB::table('posts')->where('post_id', $post->post_id)->get();
      $post2 = $currentPost[0];
      array_push($mostLikedPosts, $post2);
    }
    return view('pages.blog', compact('recentPosts', 'mostLikedPosts'));
  }

  public function blogPost($slug){
    # Search in the DB for the post with the given UNIQUE slug
    $post = Post::where('slug', '=', $slug)->firstOrFail();

    # Gets the post_id from the retrieved model
    $post_id = $post->post_id;

    return view('pages.single-post', compact('post'));
  }

  public function listAllPosts()
  {
    $posts = Post::paginate(4);
    return view('pages.blogList', compact('posts'));
  }
}
