@extends('dashboard.layouts.main')
@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $pembayaran->title }}</h1>
            <a href="/dashboard/pembayaran" class="btn btn-success"><span data-feather="arrow-left"></span> Kembali</a>
            <a href="/dashboard/pembayaran/{{ $pembayaran->id }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
            <form action="/dashboard/pembayaran/{{ $pembayaran->id }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span> Delete</button>
            </form>
           
                <h6 class= "mt-5">Nama : {{ $pembayaran->nama_depan }} {{ $pembayaran->nama_belakang }}</h6>
                <h6>Asal Kota : {{ $pembayaran->asal_kota }}</h6>
                <h6>Alamat : {{ $pembayaran->alamat }}</h6>
                <h6>Nomor HP : {{ $pembayaran->no_hp }}</h6>
                <h6>NIK : {{ $pembayaran->nik }}</h6>
                <h6>Tanggal Lahir : {{ $pembayaran->tanggal_lahir }}</h6>
                <h6>Email : {{ $pembayaran->email }}</h6>
                <h6>Jenis Paket : {{ $pembayaran->radio }}</h6>
                <h6>Harga Paket : {{ $pembayaran->formatRupiah('harga_paket')}}</h6>
                <h6>Status : 
                @if($pembayaran->status->id == 1)
                  <a class="btn btn-success" style="font-size: 10px bold">Lunas</a>
                @elseif($pembayaran->status->id == 2)
                  <a class="btn btn-danger" style="font-size: 10px bold">Belum Lunas</a>
                @else
                  <a class="btn btn-warning" style="font-size: 10px bold">Tanpa Keterangan</a> 
                @endif</h6>
            <div style="max-height: 350px; overflow: hidden;">
                    <img src="{{ asset('storage/' . $pembayaran->image) }}" alt="" class="img-fluid mt-3">
            </div>
            <div class="col-auto mt-5">
              <a href="/exportPDFinvoice" class="btn btn-info"><span data-feather="printer"></span>  Cetak Invoice</a>
            </div>
            
            
        </div>
    </div>
</div>
@endsection