@extends('layouts.main')
@section('container')

<h1 class="mb-3 text-center">{{ $title }}</h1>

<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <form action="/dakwahs">
            @if(request('category'))
                <input type="hidden" name="category" value="{{ request('category')  }}">
            @endif
            @if(request('author'))
                <input type="hidden" name="author" value="{{ request('author')  }}">
            @endif
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
                <button class="btn btn-danger" type="submit">Search</button>
            </div>
        </form>
    </div>
</div>

@if($dakwahs->count())
    <div class="card mb-3">
        @if($dakwahs[0]->image)
            <div style="max-height: 400px; max-weight: 1200px; overflow: hidden;">
                <img src="{{ asset('storage/' . $dakwahs[0]->image) }}" alt="{{ $dakwahs[0]->category->name }}" class="img-fluid">
            </div>
        @else
            <img src="http://source.unsplash.com/1200x400?{{ $dakwahs[0]->category->name }}" class="card-img-top" alt="{{ $dakwahs[0]->category->name }}">
        @endif
        
        <div class="card-body text-center">
            <h3 class="card-title"><a href="/dakwahs/{{ $dakwahs[0]->slug }}" class="text-decoration-none text-dark">{{ $dakwahs[0]->title }}</a></h3>
            <p><small class="text-muted">By. <a href="/dakwahs?author={{ $dakwahs[0]->author->username ?? 'None' }}" class="text-decoration-none">{{ $dakwahs[0]->author->name ?? 'None' }}</a> in <a href="/dakwahs?category={{ $dakwahs[0]->category->slug }}" class="text-decoration-none">{{ $dakwahs[0]->category->name }} </a>{{ $dakwahs[0]->created_at->diffForHumans() }}</small></p>
            <p class="card-text">{{ $dakwahs[0]->excerpt }}</p>
            <a href="/dakwahs/{{ $dakwahs[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
        </div>
    </div>

<div class="container">
    <div class="row">
    @foreach ($dakwahs->skip(1) as $dakwah)
        <div class="col-md-4 mb-3">
        <div class="card">
            <div class="position-absolute bg-dark px-3 py-2 text-white"><a href="/dakwahs?category={{ $dakwah->category->slug }}" class="text-white text-decoration-none">{{ $dakwah->category->name }}</a></div>
            @if($dakwah->image)
                <img src="{{ asset('storage/' . $dakwah->image) }}" alt="{{ $dakwah->category->name }}" class="img-fluid">
            @else
                <img src="http://source.unsplash.com/500x400?{{ $dakwah->category->name }}" class="card-img-top" alt="{{ $dakwah->category->name }}">
            @endif 
            <div class="card-body">
                <h5 class="card-title">{{ $dakwah->title }}</h5>
                <p><small class="text-muted">By. <a href="/dakwahs?author={{ $dakwahs[0]->author->username ?? 'None' }}" class="text-decoration-none">{{ $dakwah->author->name ?? 'None' }}</a> {{ $dakwah->created_at->diffForHumans() }}</small></p>
                <p class="card-text">{{ $dakwah->excerpt }}</p>
                <a href="/dakwahs/{{ $dakwah->slug }}" class="btn btn-primary">Read more</a>
            </div>
        </div>
        </div>
    @endforeach
    </div>
</div>

@else
    <p class="text-center fs-4">No dakwah Found.</p>
@endif
<div class="d-flex justify-content-center">
    {{ $dakwahs->links() }}
</div>

@endsection
