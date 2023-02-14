@extends('dashboard.layouts.main')
@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $pembayaran->title }}</h1>
            <a href="/dashboard/pembayaran" class="btn btn-success"><span data-feather="arrow-left"></span> Back to All Pembayaran</a>
            <form action="/dashboard/dakwahs/{{ $booking->title }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span> Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection