<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    //
    public function index(){
            $posts = Post::
                         latest()
                         ->get();
        return view('layouts.post.index',compact('posts'));

    }
    public function detail(Post $post){
        return view('layouts.post.post',[
             'posts' => $post,
         ]);
    }
}
