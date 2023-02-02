@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Post</h1>
</div>
<div class="col-lg-8">
    <form method="post" action="/dashboard/posts/{{ $post->slug }}" class="mb-5" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title', $post->title) }}">
        @error('title')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" disable value="{{ old('slug' , $post->slug) }}">
        @error('slug')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="jadwal" class="form-label">Jadwal</label>
        <input type="text" class="form-control @error('jadwal') is-invalid @enderror" id="jadwal" name="jadwal" required value="{{ old('jadwal' , $post->jadwal) }}">
        @error('jadwal')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="durasi" class="form-label">Durasi</label>
        <select class="form-select" name="durasi_id">
        @foreach($durasi as $durasi)    
        @if(old('durasi_id') == $durasi->id)
            <option value="{{ $durasi->id }}" selected>{{ $durasi->name }}</option>
        @else
            <option value="{{ $durasi->id }}">{{ $durasi->name }}</option>
        @endif 
        @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="total_seat" class="form-label">Total Seat</label>
        <input type="text" class="form-control @error('total_seat') is-invalid @enderror" id="total_seat" name="total_seat" required value="{{ old('total_seat' , $post->total_seat) }}">
        @error('total_seat')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="berangkat_dari" class="form-label">Berangkat Dari</label>
        <input type="text" class="form-control @error('berangkat_dari') is-invalid @enderror" id="berangkat_dari" name="berangkat_dari" required value="{{ old('berangkat_dari' , $post->berangkat_dari) }}">
        @error('berangkat_dari')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="maskapai" class="form-label">Maskapai</label>
        <input type="text" class="form-control @error('maskapai') is-invalid @enderror" id="maskapai" name="maskapai" required value="{{ old('maskapai' , $post->maskapai) }}">
        @error('maskapai')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="solo" class="form-label">Solo</label>
        <input type="text" class="form-control @error('solo') is-invalid @enderror" id="solo" name="solo" required value="{{ old('solo' , $post->solo) }}">
        @error('solo')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="duo" class="form-label">Duo</label>
        <input type="text" class="form-control @error('duo') is-invalid @enderror" id="duo" name="duo" required value="{{ old('duo', $post->duo) }}">
        @error('duo')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="triple" class="form-label">Triple</label>
        <input type="text" class="form-control @error('triple') is-invalid @enderror" id="triple" name="triple" required value="{{ old('triple', $post->triple) }}">
        @error('triple')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="quad" class="form-label">Quad</label>
        <input type="text" class="form-control @error('maskapai') is-invalid @enderror" id="quad" name="quad" required value="{{ old('quad', $post->quad) }}">
        @error('quad')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>

    <div class="mb-3">
        <label for="hari1" class="form-label">Hari 1</label>
        <input type="text" class="form-control @error('hari1') is-invalid @enderror" id="hari1" name="hari1" required value="{{ old('hari1' , $post->hari1) }}">
        @error('hari1')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="hari2" class="form-label">Hari 2</label>
        <input type="text" class="form-control @error('hari2') is-invalid @enderror" id="hari2" name="hari2" required value="{{ old('hari2' , $post->hari2) }}">
        @error('hari2')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="hari3" class="form-label">Hari 3</label>
        <input type="text" class="form-control @error('hari3') is-invalid @enderror" id="hari3" name="hari3" required value="{{ old('hari3' , $post->hari3) }}">
        @error('hari3')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="hari4" class="form-label">Hari 4</label>
        <input type="text" class="form-control @error('hari4') is-invalid @enderror" id="hari4" name="hari4" required value="{{ old('hari4' , $post->hari4) }}">
        @error('hari4')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="hari5" class="form-label">Hari 5</label>
        <input type="text" class="form-control @error('hari5') is-invalid @enderror" id="hari5" name="hari5" required value="{{ old('hari5' , $post->hari5) }}">
        @error('hari5')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="hari6" class="form-label">Hari 6</label>
        <input type="text" class="form-control @error('hari6') is-invalid @enderror" id="hari6" name="hari6" required value="{{ old('hari6' , $post->hari6) }}">
        @error('hari6')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="hari7" class="form-label">Hari 7</label>
        <input type="text" class="form-control @error('hari7') is-invalid @enderror" id="hari7" name="hari7" required value="{{ old('hari7' , $post->hari7) }}">
        @error('hari7')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="hari8" class="form-label">Hari 8</label>
        <input type="text" class="form-control @error('hari8') is-invalid @enderror" id="hari8" name="hari8" required value="{{ old('hari8' , $post->hari8) }}">
        @error('hari8')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="hari9" class="form-label">Hari 9</label>
        <input type="text" class="form-control @error('hari8') is-invalid @enderror" id="hari9" name="hari9" required value="{{ old('hari9' , $post->hari9) }}">
        @error('hari9')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="hari10" class="form-label">Hari 10</label>
        <input type="text" class="form-control" id="hari10" name="hari10"  value="{{ old('hari10' , $post->hari10) }}">
    </div>
    <div class="mb-3">
        <label for="hari11" class="form-label">Hari 11</label>
        <input type="text" class="form-control" id="hari11" name="hari11"  value="{{ old('hari11' , $post->hari11) }}">
    </div>
    <div class="mb-3">
        <label for="hari12" class="form-label">Hari 12</label>
        <input type="text" class="form-control" id="hari12" name="hari12"  value="{{ old('hari12' , $post->hari12) }}">
    </div>
    <div class="mb-3">
        <label for="hari13" class="form-label">Hari 13</label>
        <input type="text" class="form-control" id="hari13" name="hari13"  value="{{ old('hari13' , $post->hari13) }}">
    </div>
    <div class="mb-3">
        <label for="hari14" class="form-label">Hari 14</label>
        <input type="text" class="form-control" id="hari14" name="hari14"  value="{{ old('hari14' , $post->hari14) }}">
    </div>
    <div class="mb-3">
        <label for="hari15" class="form-label">Hari 15</label>
        <input type="text" class="form-control" id="hari15" name="hari15"  value="{{ old('hari15' , $post->hari15) }}">
    </div>
    <div class="mb-3">
        <label for="hari16" class="form-label">Hari 16</label>
        <input type="text" class="form-control" id="hari16" name="hari16" value="{{ old('hari16' , $post->hari16) }}">
    </div>
    <div class="mb-3">
        <label for="harga_paket" class="form-label">Harga Paket</label>
        <input type="text" class="form-control @error('harga_paket') is-invalid @enderror" id="harga_paket" name="harga_paket" required value="{{ old('harga_paket' , $post->harga_paket) }}">
        @error('harga_paket')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="jadwal" class="form-label">Jadwal</label>
        <input type="text" class="form-control @error('jadwal') is-invalid @enderror" id="jadwal" name="jadwal" required value="{{ old('jadwal' , $post->jadwal) }}">
        @error('jadwal')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="durasi" class="form-label">Durasi</label>
        <select class="form-select" name="durasi_id">
        @foreach($durasi as $durasi)    
        @if(old('durasi_id') == $durasi->id)
            <option value="{{ $durasi->id }}" selected>{{ $durasi->name }}</option>
        @else
            <option value="{{ $durasi->id }}">{{ $durasi->name }}</option>
        @endif 
        @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="total_seat" class="form-label">Total Seat</label>
        <input type="text" class="form-control @error('total_seat') is-invalid @enderror" id="total_seat" name="total_seat" required value="{{ old('total_seat' , $post->total_seat) }}">
        @error('total_seat')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="berangkat_dari" class="form-label">Berangkat Dari</label>
        <input type="text" class="form-control @error('berangkat_dari') is-invalid @enderror" id="berangkat_dari" name="berangkat_dari" required value="{{ old('berangkat_dari' , $post->berangkat_dari) }}">
        @error('berangkat_dari')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="maskapai" class="form-label">Maskapai</label>
        <input type="text" class="form-control @error('maskapai') is-invalid @enderror" id="maskapai" name="maskapai" required value="{{ old('maskapai' , $post->maskapai) }}">
        @error('maskapai')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="hari1" class="form-label">Hari 1</label>
        <input type="text" class="form-control @error('hari1') is-invalid @enderror" id="hari1" name="hari1" required value="{{ old('hari1' , $post->hari1) }}">
        @error('hari1')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="hari2" class="form-label">Hari 2</label>
        <input type="text" class="form-control @error('hari2') is-invalid @enderror" id="hari2" name="hari2" required value="{{ old('hari2' , $post->hari2) }}">
        @error('hari2')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="hari3" class="form-label">Hari 3</label>
        <input type="text" class="form-control @error('hari3') is-invalid @enderror" id="hari3" name="hari3" required value="{{ old('hari3' , $post->hari3) }}">
        @error('hari3')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="hari4" class="form-label">Hari 4</label>
        <input type="text" class="form-control @error('hari4') is-invalid @enderror" id="hari4" name="hari4" required value="{{ old('hari4' , $post->hari4) }}">
        @error('hari4')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="hari5" class="form-label">Hari 5</label>
        <input type="text" class="form-control @error('hari5') is-invalid @enderror" id="hari5" name="hari5" required value="{{ old('hari5' , $post->hari5) }}">
        @error('hari5')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="hari6" class="form-label">Hari 6</label>
        <input type="text" class="form-control @error('hari6') is-invalid @enderror" id="hari6" name="hari6" required value="{{ old('hari6' , $post->hari6) }}">
        @error('hari6')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="hari7" class="form-label">Hari 7</label>
        <input type="text" class="form-control @error('hari7') is-invalid @enderror" id="hari7" name="hari7" required value="{{ old('hari7' , $post->hari7) }}">
        @error('hari7')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="hari8" class="form-label">Hari 8</label>
        <input type="text" class="form-control @error('hari8') is-invalid @enderror" id="hari8" name="hari8" required value="{{ old('hari8' , $post->hari8) }}">
        @error('hari8')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="hari9" class="form-label">Hari 9</label>
        <input type="text" class="form-control @error('hari8') is-invalid @enderror" id="hari9" name="hari9" required value="{{ old('hari9' , $post->hari9) }}">
        @error('hari9')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="hari10" class="form-label">Hari 10</label>
        <input type="text" class="form-control" id="hari10" name="hari10"  value="{{ old('hari10' , $post->hari10) }}">
    </div>
    <div class="mb-3">
        <label for="hari11" class="form-label">Hari 11</label>
        <input type="text" class="form-control" id="hari11" name="hari11"  value="{{ old('hari11' , $post->hari11) }}">
    </div>
    <div class="mb-3">
        <label for="hari12" class="form-label">Hari 12</label>
        <input type="text" class="form-control" id="hari12" name="hari12"  value="{{ old('hari12' , $post->hari12) }}">
    </div>
    <div class="mb-3">
        <label for="hari13" class="form-label">Hari 13</label>
        <input type="text" class="form-control" id="hari13" name="hari13"  value="{{ old('hari13' , $post->hari13) }}">
    </div>
    <div class="mb-3">
        <label for="hari14" class="form-label">Hari 14</label>
        <input type="text" class="form-control" id="hari14" name="hari14"  value="{{ old('hari14' , $post->hari14) }}">
    </div>
    <div class="mb-3">
        <label for="hari15" class="form-label">Hari 15</label>
        <input type="text" class="form-control" id="hari15" name="hari15"  value="{{ old('hari15' , $post->hari15) }}">
    </div>
    <div class="mb-3">
        <label for="hari16" class="form-label">Hari 16</label>
        <input type="text" class="form-control" id="hari16" name="hari16" value="{{ old('hari16' , $post->hari16) }}">
    </div>
    <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <select class="form-select" name="category_id">
        @foreach($categories as $category)    
        @if(old('category_id', $post->category_id) == $category->id)
            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
        @else
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endif 
        @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Post Image</label>
        <input type="hidden" name="oldImage" value="{{ $post->image }}">
        @if($post->image)
            <img src="{{ asset('storage/' . $post->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
        @else
            <img  class="img-preview img-fluid mb-3 col-sm-5">
        @endif
        <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
        @error('image')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="body" class="form-label">Body</label>
        @error('body')
          <p class="text-danger">{{ $message }}</p>
        @enderror
        <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}"> 
        <trix-editor input="body"></trix-editor>
    </div>
    <button type="submit" class="btn btn-primary">Update Post</button>
    </form>
</div>

<script>
        const title = document.querySelector("#title");
        const slug = document.querySelector("#slug");

        title.addEventListener("change", function() {
            let preslug = title.value;
            preslug = preslug.replace(/ /g,"-");
            slug.value = preslug.toLowerCase();
        });
        document.addEventListener('trix-file-accept', function(e){
            e.preventDefault();
        })
        function previewImage(){
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview'); 

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);
            oFReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result;
            }
        }
</script>

@endsection