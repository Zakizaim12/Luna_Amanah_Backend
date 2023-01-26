<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Luna Amanah</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logoicon-01.png" rel="icon">
  <link href="assets/img/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!--Font Awesome-->
  <script src="https://kit.fontawesome.com/a2a65e7040.js" crossorigin="anonymous"></script>

  <!-- =======================================================
  * Template Name: Impact - v1.1.1
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

</head>

<body>
  
@include('partials.navbar')

      <!-- ======= Breadcrumbs ======= -->
      <div class="breadcrumbs ">
        <div class="page-header d-flex align-items-center" style="background-image: url('');">
          <div class="container position-relative">
            <div class="row d-flex justify-content-center">
              <div class="col-lg-6 text-center">
                <h2>Paket Umroh</h2>
              </div>
            </div>
          </div>
        </div>
        <nav>
          <div class="container">
            <ol>
              <li><a href="/categories">Paket Perjalanan</a></li>
              <li>Paket Umroh</li>
            </ol>
          </div>
        </nav>
      </div>
      <!-- End Breadcrumbs -->
      <main class="paket-umroh">

          <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
          <div class="row">
      @include('partials.filter')


@if($posts->count())
<div class="container">
    <div class="row">
    @foreach ($posts as $post)
        <div class="col-md-4 mb-3">
        <div class="card">
            <div class="position-absolute bg-dark px-3 py-2 text-white"><a class="text-white text-decoration-none">{{ $post->durasi->name }}</a></div>
            @if($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
            @else
                <img src="http://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
            @endif 
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p><small class="text-muted">By. <a href="/posts?author={{ $post->author->username ?? 'None' }}" class="text-decoration-none">{{ $post->author->name ?? 'None' }}</a> {{ $post->created_at->diffForHumans() }}</small></p>
                <p class="card-text">Seat Tersisa : 19</p>
                <p class="card-text">Rp. {{ $post->harga_paket }}</p>
                <p class="card-text">Jadwal Keberangkatan : {{ $post->jadwal }}</p>
                <p class="card-text">Total Seat : {{ $post->total_seat }} pax</p>
                <p class="card-text">Berangkat dari : {{ $post->berangkat_dari }}</p>
                <p class="card-text">Maskapai : {{ $post->maskapai }}</p>
                <p class="card-text">Hotel : <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></p>
                <a href="/posts/{{ $post->slug }}" class="button btn btn-primary">Detail Paket</a>
            </div>
        </div>
        </div>
    @endforeach
    </div>
</div>


{{-- @if($posts->count())
<div class="container">
  <div class="row">

@foreach ($posts as $post)
<!-- Start List Paket -->
<div id="list" class="list">
  <div id="list-card" class="list-card">
          <div class="row posts-list">
              <!--Start Card List Paket-->
              <div class="col-xl-4 col-lg-2">
                <div class="card">

                  <!--Image card-->
                  <div class="post-img">
                    <img src="../assets/img/paket/cover_umroh.png" class="img-fluid">
                  </div>
                   <!--End Image card-->

                   <!--Seat Tersisa-->
                  <div class="seat">
                    <h4>Seat Tersisa : 19</h4>
                  </div>
                  <!--End Seat Tersisa-->

                  <!--Judul-->
                    <h2 class="title">
                    <a href="detail.html">{{ $post->title }}</a>
                    </h2>
                  <!--End Judul-->
                  
                  <!--Harga Paket-->
                    <p class="harga">Rp 20.000.000</p>
                  <!--End Harga Paket-->

                    <div class="container">

                    <div class="jadwal">
                      <div class="row">
                        <div class="col-8">
                          <p class="category"><span class="fa fa-calendar"></span>  Jadwal Keberangkatan :</p>
                        </div>
                        <div class="col-4">
                          <p class="right"><time datetime="2023-01-01"></time>1 januari 2023</p>
                        </div>
                      </div>
                    </div>
                        
                    <div class="total-seat">
                      <div class="row">
                        <div class="col-8">
                            <p><span class="fa fa-user"></span> Total Seat :</p>
                        </div>
                        <div class="col-4">
                                <p class="right">60 pax</p>
                        </div>
                      </div>
                    </div>

                    <div class="lokasi">
                      <div class="row">
                        <div class="col-8">
                          <p><span class="fa fa-map-marker"></span> Berangkat dari :</p>
                        </div>
                        <div class="col-4">
                              <p class="right">Makassar</p>
                        </div>
                      </div>
                    </div>

                    
                    <div class="maskapai">
                        <div class="row">
                          <div class="col-4">
                              <p><span class="fa fa-plane"></span> Maskapai :</p>
                          </div>
                          <div class="col-8">
                              <p class="right">Garuda airlines</p>
                          </div>
                      </div>
                    </div>

                    <div class="hotel">
                      <div class="row">
                        <div class="col-8">
                          <p><span class="fa fa-building"></span> Hotel :</p>
                        </div>
                        <div class="col-4">
                          <p class="right"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></p>
                        </div>
                      </div>
                    </div>

                    </div>
                    
                    <div class="btn-detail">
                      <div class="button">
                        <a href="/posts/{{ $post->slug }}" ><p>Detail Paket</p> </a>
                      </div>
                    </div>

                    <div class="hari">
                      <p class="post-category" hidden>9</p>
                      <p>9 hari</p>
                    </div>

                </div> 
              </div>
              <!--End Start Card List Paket-->  
          </div>
        </div>
</div>
@endforeach
  </div>
</div> --}}
<!-- End List Paket -->
@else
    <p class="text-center fs-4">No Post Found.</p>
@endif
</div>
</div>
</main>

<!-- //pagination -->
<div class="d-flex justify-content-center">
    {{ $posts->links() }}
</div>


@include('partials.footer')
      <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
      <div id="preloader"></div>
    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>


    