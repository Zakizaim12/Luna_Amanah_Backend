@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Status Pembayaran Paket</h1>
    </div>
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="col-auto">
      <a href="/export/excel" class="btn btn-success">Export to Excel</a>
    </div>
    
    <div class="table-responsive col-lg-12">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama Paket</th>
              <th scope="col">Nama Pemesan</th>
              <th scope="col">Asal Kota</th>
              <th scope="col">Alamat</th>
              <th scope="col">Nomor Hp</th>
              <th scope="col">NIK</th>
              <th scope="col">Tanggal Lahir</th>
              <th scope="col">Email</th>
              <th scope="col">Nama Paket</th>
              <th scope="col">Harga Paket</th>
              <th scope="col">Status Pembayaran</th>
            </tr>
          </thead>
          <tbody>
            @foreach($pembayaran as $booking)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $booking->title }}</td>
                <td>{{ $booking->nama_depan }} {{ $booking->nama_belakang }}</td>
                <td>{{ $booking->asal_kota }}</td>
                <td>{{ $booking->alamat }}</td>
                <td>{{ $booking->no_hp }}</td>
                <td>{{ $booking->nik }}</td>
                <td>{{ $booking->tanggal_lahir }}</td>
                <td>{{ $booking->email }}</td>
                
                
                <td>{{ $booking->radio }}</td>
                <td>{{ $booking->formatRupiah('harga_paket')}}</td>
                @if($booking->status->id == 1)
                  <td ><center><a class="btn btn-success" style="font-size: 10px">Lunas</a></center></td>
                @elseif($booking->status->id == 2)
                  <td><center><a class="btn btn-danger" style="font-size: 10px">Belum Lunas</a></center></td>
                @else
                  <td ><center><a class="btn btn-warning" style="font-size: 10px">Tanpa Keterangan</a></center></td> 
                @endif
                <td>
                    <a href="/dashboard/pembayaran/{{ $booking->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                    <form action="/dashboard/pembayaran/{{ $booking->id}}" method="post" class="d-inline">
                      @method('delete')
                      @csrf
                      <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span</button>
                    </form>
                </td>
                
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>
@endsection