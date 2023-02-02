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

</head>
<body>
 <!-- ======= Header ======= -->
 @include('partials.navbar')
  
  <main id="main">
      <!-- paket -->
      <section id="paket" class="paket sections-bg">
        <div class="container" data-aos="fade-up">
  
          <div class="section-header">
            <h2>Paket Perjalanan</h2>
          
              <div class="container">
                  <div class="row">

                    <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                      <div class="paket-wrap">
                        <a href="/posts?category={{ $categories[0]->slug }}"><img src="assets/img/paket/cover_umroh.png" class="img-fluid" alt=""></a>
                        <div class="paket-info">
                          <h4><a href="/posts?category={{ $categories[0]->slug }}" title="More Details">{{ $categories[0]->name }}</a></h4>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                      <div class="paket-wrap">
                        <a href="/posts?category={{ $categories[1]->slug }}"><img src="assets/img/paket/cover_umroh.png" class="img-fluid" alt=""></a>
                        <div class="paket-info">
                          <h4><a href="/posts?category={{ $categories[1]->slug }}" title="More Details">{{ $categories[1]->name }}</a></h4>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                      <div class="paket-wrap">
                        <a href="/posts?category={{ $categories[2]->slug }}"><img src="assets/img/paket/cover_umroh.png" class="img-fluid" alt=""></a>
                        <div class="paket-info">
                          <h4><a href="/posts?category={{ $categories[2]->slug }}" title="More Details">{{ $categories[2]->name }}</a></h4>
                        </div>
                      </div>
                    </div>

                  </div>
              </div>
          </div> 
         
  </main>

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