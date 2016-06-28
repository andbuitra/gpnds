<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Post;
use App\Models\User;
use App\AccessPoints\Blog as BlogAP;
use DB;

class BlogController extends Controller
{
  public function mainBlogList(){

    $mainList = BlogAP::mainList();

    $recentPosts = $mainList['recentPosts'];
    $mostLikedPosts = $mainList['mostLikedPosts'];

    return view('pages.blog', compact('recentPosts', 'mostLikedPosts'));
  }

  public function blogPost($slug){
    $post = BlogAP::getPost($slug);
    return view('pages.single-post', compact('post'));
  }

  public function listAllPosts(){
    $posts = BlogAP::index();
    return view('pages.blogList', compact('posts'));

  }
}
