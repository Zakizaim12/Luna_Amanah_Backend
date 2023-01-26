@extends('layouts.main')
@section('container')
<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h1 class="mb-3">{{ $dakwah->title }}</h1>
            <p>By. <a href="/dakwahs?author={{ $dakwah->author->username }}" class="text-decoration-none">{{ $dakwah->author->name }}</a> in <a href="/dakwahs?category={{ $dakwah->category->slug }}" class="text-decoration-none">{{ $dakwah->category->name}}</a></p>
            @if($dakwah->image)
                <div style="max-height: 350px; overflow: hidden;">
                    <img src="{{ asset('storage/' . $dakwah->image) }}" alt="{{ $dakwah->category->name }}" class="img-fluid">
                </div>
            @else
                <img src="http://source.unsplash.com/1200x400?{{ $dakwah->category->name }}" alt="{{ $dakwah->category->name }}" class="img-fluid">
            @endif 
            <article class="my-3 fs-5">{!! $dakwah->body !!}</article>
            <a href="/dakwahs" class="d-block mt-3">Back to posts</a>  
        </div>
    </div>
</div>
  
@endsection