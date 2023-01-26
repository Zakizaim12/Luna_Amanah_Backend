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
                <h2>Informasi</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Breadcrumbs -->

@if($dakwahs->count())
<div class="container">
    <div class="row">
    @foreach ($dakwahs as $dakwah)
        <div class="col-md-4 mb-3 mt-4">
        <div class="card">
            @if($dakwah->image)
                <img src="{{ asset('storage/' . $dakwah->image) }}" alt="" class="img-fluid">
            @else
                <img src="http://source.unsplash.com/500x400?" class="card-img-top" alt="">
            @endif 
            <div class="card-body"> 
                <h5 class="card-title"><b>{{ $dakwah->title }}</b></h5>
                <p><small class="text-muted">By. <a href="/dakwahs?author={{ $dakwah->author->username ?? 'None' }}" class="text-decoration-none">{{ $dakwah->author->name ?? 'None' }}</a> {{ $dakwah->created_at->diffForHumans() }}</small></p>
                <p class="card-text">{{ $dakwahs[0]->excerpt }}</p>
                <a href="/dakwahs/{{ $dakwah->slug }}" class="button btn btn-primary btn-danger">Read More</a>
            </div>
        </div>
        </div>
    @endforeach
    </div>
</div>

@else
    <p class="text-center fs-4">No Post Found.</p>
@endif
</div>
</div>
<!-- //pagination -->
<div class="d-flex justify-content-center">
    {{ $dakwahs->links() }}
</div>


@include('partials.footer')

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


    