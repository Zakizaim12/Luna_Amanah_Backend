<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Detail Paket</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../../assets/img/logoicon-01.png" rel="icon">
  <link href="../../assets/img/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../../assets/css/main.css" rel="stylesheet">

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

<!-- ======= Header ======= -->
<section id="topbar" class="topbar d-flex align-items-center">
  <div class="container d-flex justify-content-center justify-content-md-between">
    <div class="contact-info d-flex align-items-center">
      <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">lunaamanah@gmail.com</a></i>
      <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
    </div>
    <div class="social-links d-none d-md-flex align-items-center">
      <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
      <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
      <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
      <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
    </div>
  </div>
</section><!-- End Top Bar -->

<header id="header" class="header d-flex align-items-center">

  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
    <a href="/" class="logo d-flex align-items-center">
      <img src="../assets/img/logo.png">
    </a>
    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link {{ ($active === "home") ? 'active' : '' }}" aria-current="page" href="/">Home</a></li>
        <li><a class="nav-link {{ ($active === "about") ? 'active' : '' }}"href="/about">Tentang Kami</a></li>
        <li><a class="nav-link {{ ($active === "categories") ? 'active' : '' }}" href="/categories">Paket Perjalanan</a></li>
        <li><a class="nav-link {{ ($active === "dakwahs") ? 'active' : '' }}" href="/dakwahs">Informasi</a></li>
        <li><a class="nav-link {{ ($active === "contact") ? 'active' : '' }}" href="/contact">Hubungi Kami</a></li>
      </ul>
      <ul class="navbar-nav ms-auto">
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Welcome back, {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><form action="/logout" method="post">
              @csrf
              <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
            </form></li>
          </ul>
        </li>
        @else
        <li class="nav-item">
          <a href="/login" class="nav-link {{ ($active === "login") ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
        </li>
        @endauth
      </ul>
    </nav><!-- .navbar -->

    <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
    <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

  </div>
</header><!-- End Header -->
<!-- End Header -->
      <!-- ======= Breadcrumbs ======= -->
      <div class="breadcrumbs">
        <nav>
          <div class="container">
            <ol>
                <li><a href="/categories">Paket Perjalanan</a></li>
                <li><a href="">Paket Umroh</a></li>
                <li>Detail Paket</li>
            </ol>
          </div>
        </nav>
      </div>
      <!-- End Breadcrumbs -->

      <main>
        <div class="container" data-aos="fade-up">
        <div class="row justify-content-start">
    
          <div class="col-xl-8">
            
        <section id="detail-paket" class="detail-paket">  
              <div class="align-item-center">
                @if($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid img-fluid rounded-4 mb-4">
            @else
                <img src="http://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid img-fluid rounded-4 mb-4">
            @endif 
              </div>
              <div>
    
                <article>{!! $post->body !!}</article>
                  
              </div>
            </div>
        </section>
    
        <!-- ======= Booking Section ======= -->
        <div class="col-xl-4">
          <div class="row">
          <section id="booking" class="booking">
           
                
                  <div class="nama-paket">
                    <div class="nama-paket-header">
                      <h2>{{ $post->title }}</h2>
                      <h3>Seat Tersisa:19</h3>
                      </div>
                      <div class="line"></div>
                      <div class="paket-item">
                        
                        <h2>Detail Paket</h2>
                        <div class="jadwal">
                          <div class="row">
                            <div class="col">
                              <p class="category"><span class="fa fa-calendar"></span>  Tanggal :</p>
                            </div>
                            <div class="col">
                              <p class="right"><time datetime="2023-01-01"></time>{{ $post->jadwal }}</p>
                            </div>
                          </div>
                        </div>
                            
                        <div class="total-seat">
                                <div class="row">
                                  <div class="col">
                                    <p><span class="fa fa-user"></span> Total Seat :</p>
                                  </div>
                                  <div class="col-4">
                                    <p class="right">{{ $post->total_seat }} pax</p>
                                  </div>
                                </div>
                        </div>
    
                        <div class="lokasi">
                                    <div class="row">
                                      <div class="col">
                                        <p><span class="fa fa-map-marker"></span> Berangkat dari :</p>
                                      </div>
                                      <div class="col">
                                        <p class="right">{{ $post->berangkat_dari }}</p>
                                      </div>
                                    </div>
                        </div>
    
                        
                        <div class="maskapai">
                                  <div class="row">
                                    <div class="col">
                                      <p><span class="fa fa-plane"></span> Maskapai :</p>
                                    </div>
                                    <div class="col">
                                      <p class="right">{{ $post->maskapai }}</p>
                                    </div>
                                  </div>
                        </div>
    
                        <div class="hotel">
                          <div class="row">
                            <div class="col">
                              <p><span class="fa fa-building"></span> Hotel :</p>
                            </div>
                            <div class="col">
                              <p class="right"><span class="fa-solid fa-star"></span><span class="fa-solid fa-star"></span><span class="fa-solid fa-star"></span><span class="fa-solid fa-star"></span><span class="fa-solid fa-star"></span></p>
                            </div>
                          </div>
                        </div>

    
                        </div>
                        <button class="booking-btn">
                          <span class="fa fa-whatsapp"></span> Hubungi CS
                        </button>
                          <button type="submit" class="booking-btn" name="simpan"> 
                              <a href="/posts/{{ $post->slug }}/booking">Booking Paket</a> 
                          </button>
                        </div>

                  </div>
              </section>
            </div>
          </div>
    
          </div>
          </div>
    
    
             <!-- hari perjalanan -->
          <div id="faq" class="faq">
            <div class="container" data-aos="fade-up">

                  <div class="section-header">
                    <h2>Jadwal Perjalanan</h2>
                  </div>
      
                <div>
                  <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="120">
                    <div class="accordion-item">
                      <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                          Hari ke-1
                        </button>
                      </h3>
                      <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                        <div class="accordion-body">{{ $post->hari1 }}</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                          Hari ke-2
                        </button>
                      </h3>
                      <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                        <div class="accordion-body">{{ $post->hari2 }}</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                          Hari ke-3
                        </button>
                      </h3>
                      <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                        <div class="accordion-body">{{ $post->hari3 }}</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                          Hari ke-4
                        </button>
                      </h3>
                      <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                        <div class="accordion-body">{{ $post->hari4 }}</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                          Hari ke-5
                        </button>
                      </h3>
                      <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                        <div class="accordion-body">{{ $post->hari5 }}</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-6">
                          Hari ke-6
                        </button>
                      </h3>
                      <div id="faq-content-6" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                        <div class="accordion-body">{{ $post->hari6 }}</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-7">
                          Hari ke-7
                        </button>
                      </h3>
                      <div id="faq-content-7" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                        <div class="accordion-body">{{ $post->hari7 }}</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-8">
                          Hari ke-8
                        </button>
                      </h3>
                      <div id="faq-content-8" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                        <div class="accordion-body">{{ $post->hari8 }}</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-9">
                          Hari ke-9
                        </button>
                      </h3>
                      <div id="faq-content-9" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                        <div class="accordion-body">{{ $post->hari9 }}</div>
                      </div>
                    </div>
                    @if($post->hari10)
                    <div class="accordion-item">
                      <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-10">
                          Hari ke-10
                        </button>
                      </h3>
                      <div id="faq-content-10" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                        <div class="accordion-body">{{ $post->hari10 }}</div>
                      </div>
                    </div>
                    @else

                    @endif
                    @if($post->hari11)
                    <div class="accordion-item">
                      <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-11">
                          Hari ke-11
                        </button>
                      </h3>
                      <div id="faq-content-11" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                        <div class="accordion-body">{{ $post->hari11 }}</div>
                      </div>
                    </div>
                    @else
                    
                    @endif
                    @if($post->hari12)
                    <div class="accordion-item">
                      <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-12">
                          Hari ke-12
                        </button>
                      </h3>
                      <div id="faq-content-12" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                        <div class="accordion-body">{{ $post->hari12 }}</div>
                      </div>
                    </div>
                    @else
                    
                    @endif
                    @if($post->hari13)
                    <div class="accordion-item">
                      <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-13">
                          Hari ke-13
                        </button>
                      </h3>
                      <div id="faq-content-13" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                        <div class="accordion-body">{{ $post->hari13 }}</div>
                      </div>
                    </div>
                    @else
                    
                    @endif
                    @if($post->hari14)
                    <div class="accordion-item">
                      <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-14">
                          Hari ke-14
                        </button>
                      </h3>
                      <div id="faq-content-14" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                        <div class="accordion-body">{{ $post->hari14 }}</div>
                      </div>
                    </div>
                    @else

                    @endif
                    @if($post->hari15)
                    <div class="accordion-item">
                      <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-15">
                          Hari ke-15
                        </button>
                      </h3>
                      <div id="faq-content-15" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                        <div class="accordion-body">{{ $post->hari15 }}</div>
                      </div>
                    </div>
                    @else

                    @endif
                    @if($post->hari16)
                    <div class="accordion-item">
                      <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-16">
                          Hari ke-16
                        </button>
                      </h3>
                      <div id="faq-content-16" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                        <div class="accordion-body">{{ $post->hari16 }}</div>
                      </div>
                    </div>
                    @else

                    @endif
                  </div>
                </div>
              
            </div>
          </section>
          <!-- End hari perjalanan -->
              </div>
              
        <!--Video Penjelasan-->
        <div class="video">
          <div class="section-header">
            <h2>Video Penjelasan Paket</h2>
          </div>
          <div id="video" class="video-detail">
            <div class="container text-center" data-aos="zoom-out">
              <a href="https://www.youtube.com/watch?v=XJBibv9_FBI" class="glightbox play-btn"></a>
              <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <a class="cta-btn" href="https://www.youtube.com/watch?v=XJBibv9_FBI">Lihat Video</a>
            </div>
          </div>
        </div>
        <!--End Video Penjelasan-->
    
        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery">
          <div class="container">
    
            <div class="section-header" data-aos="fade-up">
              <h2>Gallery</h2>
              <p>Check our Gallery</p>
            </div>
    
            <div class="row g-0" data-aos="fade-left">
    
              <div class="col-lg-3 col-md-4">
                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="100">
                  <a href="../../assets/img/gallery/gallery-1.jpg" class="gallery-lightbox">
                    <img src="../../assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
                  </a>
                </div>
              </div>
    
              <div class="col-lg-3 col-md-4">
                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="150">
                  <a href="../../assets/img/gallery/gallery-2.jpg" class="gallery-lightbox">
                    <img src="../../assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
                  </a>
                </div>
              </div>
    
              <div class="col-lg-3 col-md-4">
                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="200">
                  <a href="../../assets/img/gallery/gallery-3.jpg" class="gallery-lightbox">
                    <img src="../../assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
                  </a>
                </div>
              </div>
    
              <div class="col-lg-3 col-md-4">
                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="250">
                  <a href="../../assets/img/gallery/gallery-4.jpg" class="gallery-lightbox">
                    <img src="../../assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
                  </a>
                </div>
              </div>
    
              <div class="col-lg-3 col-md-4">
                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="300">
                  <a href="../../assets/img/gallery/gallery-5.jpg" class="gallery-lightbox">
                    <img src="../../assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
                  </a>
                </div>
              </div>
    
              <div class="col-lg-3 col-md-4">
                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="350">
                  <a href="../../assets/img/gallery/gallery-6.jpg" class="gallery-lightbox">
                    <img src="../../assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
                  </a>
                </div>
              </div>
    
              <div class="col-lg-3 col-md-4">
                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="400">
                  <a href="../../assets/img/gallery/gallery-7.jpg" class="gallery-lightbox">
                    <img src="../../assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
                  </a>
                </div>
              </div>
    
              <div class="col-lg-3 col-md-4">
                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="450">
                  <a href="../../assets/img/gallery/gallery-8.jpg" class="gallery-lightbox">
                    <img src="../../assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
                  </a>
                </div>
              </div>
    
            </div>
    
          </div>
        </section>
        <!-- End Gallery Section -->
    
    
      </div>
      </main><!-- End #main -->

  @include('partials.footer')


  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/vendor/aos/aos.js"></script>
  <script src="../../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../../assets/js/main.js"></script>

  <script>
    function getValue() {
            var checkboxes = 
                document.getElementsByName('radio');
            var result = "";
            for (var i = 0; i < checkboxes.length; i++) {
                if (checkboxes[i].checked) {
                    result +=  checkboxes[i].value ;
                }
            }

        }
  </script>
</body>

</html>