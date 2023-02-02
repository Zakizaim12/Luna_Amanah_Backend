@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Posts</h1>
    </div>
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="table-responsive col-lg-8">
        <a href="/dashboard/dakwahs/create" class="btn btn-primary mb-3">Create New Post</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Judul</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($dakwahs as $dakwah)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $dakwah->title }}</td>
                <td>
                    <a href="/dashboard/dakwahs/{{ $dakwah->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
                    <a href="/dashboard/dakwahs/{{ $dakwah->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                    <form action="/dashboard/dakwahs/{{ $dakwah->slug }}" method="post" class="d-inline">
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