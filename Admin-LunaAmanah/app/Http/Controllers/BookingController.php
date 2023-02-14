<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Models\booking;
use Illuminate\Http\Request;
use App\Exports\BookingExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StorebookingRequest;
use App\Http\Requests\UpdatebookingRequest;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function export() 
    {
        return Excel::download(new BookingExport, 'booking.xlsx');  
    }
    public function index()
    {
        // $pembayaran = booking::all();
        // dd($pembayaran);
        // $pembayaran = booking::all();
        // return view('dashboard.pembayaran.index')->with('pembayaran',$pembayaran);
        return view('dashboard.pembayaran.index', [
            'pembayaran' => booking::all(),
            'statuses' => Status::all()
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('booking', [
        //     'active' => 'posts'
        // ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorebookingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorebookingRequest $request)
    {
        // $validatedData = $request->validate([
        //     'nama_depan' => 'required|max:255',
        //     'nama_belakang' => 'required|max:255',
        //     'asal_kota' => 'required|max:255',
        //     'alamat' => 'required|max:255',
        //     'no_hp' => 'required',
        //     'nik' => 'required',
        //     'tanggal_lahir' => 'required',
        //     'email' => 'required|email:dns',
        //     'image' => 'image|file|max:1024',
        // ]);
        // if($request->file('image')){
        //     $validatedData['image'] = $request->file('image')->store('book-images');
        // }
        // booking::create($validatedData);

        // return redirect('posts/{post:slug}/booking')->with('success', 'Anda Telah Berhasil Memesan Paket!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(booking $pembayaran)
    {
        return view('dashboard.pembayaran.edit', [
            'pembayaran' => $pembayaran,
            'statuses' => Status::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatebookingRequest  $request
     * @param  \App\Models\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatebookingRequest $request, booking $pembayaran)
    {
        $rules = [
            // 'title' => 'required|max:255',
            // 'nama_depan' => 'required|max:255',
            // 'nama_belakang' => 'required|max:255',
            // 'full_name' => 'required|max:255',
            // 'asal_kota' => 'required|max:255',
            // 'alamat' => 'required|max:255',
            // 'no_hp' => 'required',
            // 'nik' => 'required',
            // 'tanggal_lahir' => 'required',
            // 'email' => 'required|email:dns|unique:users',
            'image' => 'image|file|max:1024',
            'harga_paket' => 'required',
            'status_id' => 'required'
        ];
        
        $validatedData = $request->validate($rules);
        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }
        booking::where('id', $pembayaran->id)->update($validatedData);
        
        return redirect('/dashboard/pembayaran')->with('success', 'Post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(booking $pembayaran)
    {
        if($pembayaran->image){
            Storage::delete($pembayaran->image);
        }
        booking::destroy($pembayaran->id);
        return redirect('/dashboard/pembayaran')->with('success', 'Pesanan has been Deleted!');
    }

    
}
