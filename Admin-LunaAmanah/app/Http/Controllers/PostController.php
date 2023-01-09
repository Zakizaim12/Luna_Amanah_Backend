<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
class PostController extends Controller
{
    public function index(){    
        return view('posts', [
            "active" => 'posts',
            "posts" => Post::latest()->filter(request(['search' , 'category', 'author']))->paginate(6)->withQueryString()
        ]);
        return view('home', [
            "active" => 'home',
            "posts" => Post::latest()->filter(request(['search' , 'category', 'author']))->paginate(3)->withQueryString()
        ]);
    }
    public function show(Post $post){
        return view('post', [
            "title" => "Single Post",
            "active" => 'posts',
            "post" => $post
        ]);
    }
}
