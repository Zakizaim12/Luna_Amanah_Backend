@extends('dashboard.layouts.main')
@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $dakwah->title }}</h1>
            <a href="/dashboard/dakwahs" class="btn btn-success"><span data-feather="arrow-left"></span> Back to All My dakwahs</a>
            <a href="/dashboard/dakwahs/{{ $dakwah->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
            <form action="/dashboard/dakwahs/{{ $dakwah->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span> Delete</button>
            </form>
            @if($dakwah->image)
                <div style="max-height: 350px; overflow: hidden;">
                    <img src="{{ asset('storage/' . $dakwah->image) }}" alt="" class="img-fluid mt-3">
                </div>
            @else
                <img src="http://source.unsplash.com/1200x400" alt="" class="img-fluid mt-3">
            @endif           
            <article class="my-3 fs-5">{!! $dakwah->body !!}</article>
        </div>
    </div>
</div>
@endsection