<?php

namespace App\Http\Controllers;

use App\Models\Dakwah;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardDakwahController extends Controller
{

    public function index()
    {
        return view('dashboard.dakwahs.index', [
            'dakwahs' => Dakwah::where('user_id', auth()->user()->id)->get()
        ]);
    }

    public function create()
    {
        return view('dashboard.dakwahs.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:dakwahs',
            'image' => 'image|file|max:1024',
            'body' => 'required'
        ]);
        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('dakwah-images');
        }
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 150);
        Dakwah::create($validatedData);

        return redirect('/dashboard/dakwahs')->with('success', 'New Post has been Added!');
    }


    public function show(Dakwah $dakwah)
    {
        if($dakwah->author->id !== auth()->user()->id) {
            abort(403);
        }
        return view('dashboard.dakwahs.show', [
            'dakwah' => $dakwah
        ]);
    }


    public function edit(Dakwah $dakwah)
    {
        if($dakwah->author->id !== auth()->user()->id) {
            abort(403);
        }
        return view('dashboard.dakwahs.edit', [
            'dakwah' => $dakwah
        ]);
    }


    public function update(Request $request, Dakwah $dakwah)
    {
        $rules = [
            'title' => 'required|max:255',
            'image' => 'image|file|max:1024',
            'body' => 'required'
        ];
        if($request->slug != $dakwah->slug){
            $rules['slug'] = 'required|unique:dakwahs';
        }
        $validatedData = $request->validate($rules);
        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('dakwah-images');
        }
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 150);
        Dakwah::where('id', $dakwah->id)->update($validatedData);

        return redirect('/dashboard/dakwahs')->with('success', 'Post has been updated!');
    }

    public function destroy(Dakwah $dakwah)
    {
        if($dakwah->image){
            Storage::delete($dakwah->image);
        }
        Dakwah::destroy($dakwah->id);

        return redirect('/dashboard/dakwahs')->with('success', 'Post has been Deleted!');
    }
}
