@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Post</h1>
</div>
<div class="col-lg-8">
    <form method="post" action="/dashboard/pembayaran/{{ $pembayaran->id }}" class="mb-5" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="mb-3">
      <label for="Status" class="form-label">Status Pembayaran</label>
      <select class="form-select" name="status_id">
      @foreach($statuses as $status)    
      @if(old('status_id', $pembayaran->status_id) == $status->id)
          <option value="{{ $status->id }}" selected>{{ $status->status_pembayaran }}</option>
      @else
          <option value="{{ $status->id }}">{{ $status->status_pembayaran }}</option>
      @endif 
      @endforeach
      </select>
  </div>
  <div class="mb-3">
    <label for="image" class="form-label">Foto Pendaftar</label>
    <input type="hidden" name="oldImage" value="{{ $pembayaran->image }}">
    @if($pembayaran->image)
        <img src="{{ asset('storage/' . $pembayaran->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
    @else
        <img  class="img-preview img-fluid mb-3 col-sm-5">
    @endif
    <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
    @error('image')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label for="harga_paket" class="form-label">Harga Paket</label>
    <input type="text" class="form-control @error('harga_paket') is-invalid @enderror" id="harga_paket" name="harga_paket" required autofocus value="{{ old('harga_paket', $pembayaran->harga_paket) }}">
    @error('harga_paket')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
  
    <button type="submit" class="btn btn-primary">Update Post</button>
    </form>
</div>

@endsection