<?php

namespace App\Http\Controllers;
use App\Models\booking;
use Illuminate\Http\Request;


class PemesananController extends Controller
{
    public function store(Request $request){
        $validatedData = $request->validate([
            'nama_depan' => 'required|max:255',
            // 'nama_belakang' => 'required|max:255',
            // 'asal_kota' => 'required|max:255',
            // 'alamat' => 'required|max:255',
            // 'no_hp' => 'required',
            // 'nik' => 'required',
            // 'tanggal_lahir' => 'required',
            // 'email' => 'required|email:dns|unique:users',
            // 'image' => 'image|file|max:1024',
        ]);
        // if($request->file('image')){
        //     $validatedData['image'] = $request->file('image')->store('book-images');
        // }
        booking::create($validatedData);

        return redirect('/booking')->with('success', 'Anda Telah Berhasil Memesan Paket!');
    }
}
