<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Models\booking;
class PostController extends Controller
{
    public function index(){    
        return view('posts', [
            "active" => 'posts',
            "posts" => Post::latest()->filter(request(['search' , 'category', 'author']))->paginate(6)->withQueryString()
        ]);
    }

    public function show(Post $post){
        return view('post', [
            "title" => "Single Post",
            "active" => 'posts',
            "post" => $post
        ]);
    }
    public function book(Post $post){
        return view('booking',[
            "active" => 'posts',
            "post" => $post
        ]);
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'nama_depan' => 'required|max:255',
            'nama_belakang' => 'required|max:255',
            'status_id' => 'required',
            'radio' => 'required',
            'title' => 'required',
            'asal_kota' => 'required|max:255',
            'alamat' => 'required|max:255',
            'no_hp' => 'required|max:20',
            'nik' => 'required',
            'tanggal_lahir' => 'required',
            'email' => 'required|email:dns',
            'image' => 'image|file|max:1024'
        ]);
        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('book-images');
        }
        if($validatedData['status_id'] !== '3'){
            abort(403);
        } 
        if (in_array($validatedData['radio'], array("Solo", "Duo", "Triple", "Quad"))){

        }
        else{
            abort(403); 
        }
        booking::create($validatedData);
        return Redirect::back()->with('success', 'Anda berhasil Memesan Paket!');
    }

}
