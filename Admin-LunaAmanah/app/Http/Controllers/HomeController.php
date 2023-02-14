<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function index(){    
        return view('home', [
            "active" => 'posts',
            "posts" => Post::latest()->filter(request(['search' , 'category', 'author']))->paginate(3)->withQueryString()
        ]);
    }

    
}
