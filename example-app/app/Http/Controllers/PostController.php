<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        //\Log::debug($posts);
        //dd($posts);
        return view('posts.index', ['allposts'=>$posts]);
    }
}
