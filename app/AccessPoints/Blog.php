<?php

namespace App\AccessPoints;

use App\Models\Post as PostM;
use App\Models\User as UserM;
use DB;

class Blog {
  public static function mainList(){
    # Gets the 4 more recent posts and save them in an array
    $recentPosts = PostM::orderBy('created_at', 'desc')->get()->take(4)->toArray();

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

    return [
      'recentPosts' => $recentPosts,
      'mostLikedPosts' => $mostLikedPosts
    ];

  }

  public static function getPost($slug){
    return $post = PostM::where('slug', '=', $slug)->firstOrFail();
  }

  public static function index(){
    return PostM::paginate(4);
  }

}
