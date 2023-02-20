<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\Durasi;
use App\Models\Star;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.posts.index', [
            'posts' => Post::where('user_id', auth()->user()->id)->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.posts.create', [
            'categories' => Category::all(),
            'durasi' => Durasi::all(),
            "stars" => Star::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'category_id' => 'required',
            'star_id' => 'required',
            'jadwal' => 'required',
            'durasi_id' => 'required',
            'total_seat' => 'required',
            'seat_tersedia' => 'required',
            'berangkat_dari' => 'required|max:255',
            'maskapai' => 'required|max:255',
            'solo' => 'required',
            'duo' => 'required',
            'triple' => 'required',
            'quad' => 'required',
            'hari1' => 'required',
            'hari2' => 'required',
            'hari3' => 'required',
            'hari4' => 'required',
            'hari5' => 'required',
            'hari6' => 'required',
            'hari7' => 'required',
            'hari8' => 'required',
            'hari9' => 'required',
            'image' => 'image|file|max:1024',
            'body' => 'required'
        ]);
        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('post-images');
        }
        $validatedData['user_id'] = auth()->user()->id;
        Post::create($validatedData);

        return redirect('/dashboard/posts')->with('success', 'New Post has been Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        if($post->author->id !== auth()->user()->id) {
            abort(403);
        }
        return view('dashboard.posts.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        if($post->author->id !== auth()->user()->id) {
            abort(403);
        }
        return view('dashboard.posts.edit', [
            'post' => $post,
            'categories' => Category::all(),
            'durasi' => Durasi::all(),
            "stars" => Star::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $rules = [
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'category_id' => 'required',
            'star_id' => 'required',
            'durasi_id' => 'required',
            'jadwal' => 'required',
            'total_seat' => 'required',
            'seat_tersedia' => 'required',
            'berangkat_dari' => 'required|max:255',
            'maskapai' => 'required|max:255',
            'solo' => 'required',
            'duo' => 'required',
            'triple' => 'required',
            'quad' => 'required',
            'hari1' => 'required',
            'hari2' => 'required',
            'hari3' => 'required',
            'hari4' => 'required',
            'hari5' => 'required',
            'hari6' => 'required',
            'hari7' => 'required',
            'hari8' => 'required',
            'hari9' => 'required',
            'image' => 'image|file|max:1024',
            'body' => 'required'
        ];
        if($request->slug != $post->slug){
            $rules['slug'] = 'required|unique:posts';
        }
        $validatedData = $request->validate($rules);
        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }
        $validatedData['user_id'] = auth()->user()->id;
        Post::where('id', $post->id)->update($validatedData);

        return redirect('/dashboard/posts')->with('success', 'Post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if($post->image){
            Storage::delete($post->image);
        }
        Post::destroy($post->id);

        return redirect('/dashboard/posts')->with('success', 'Post has been Deleted!');
    }
}