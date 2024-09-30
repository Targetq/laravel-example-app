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
    public function show($id){

        //dd($id)
        $post = Post::find($id);
        return view("posts.show", ['singlepost'=> $post]);

    }
    public function create(){

        return view("posts.create");
    }
    public function store(){
        return "to be implemented";
    }
}
