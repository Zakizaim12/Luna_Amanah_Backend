<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Luna Amanah</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../../../assets/img/logoicon-01.png" rel="icon">
  <link href="../../../assets/img/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../../../assets/css/main.css" rel="stylesheet">

    <!--Font Awesome-->
  <script src="https://kit.fontawesome.com/a2a65e7040.js" crossorigin="anonymous"></script>

</head>
<body>

    @include('partials.navbar')

  <main>
    <section class="booking-detail" data-aos="fade-up">
      <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <div class="booking-item">

          <div class="row">
            <div class="col-xl-8">
              <div class="form">

                  <div class="form-header">
                    <h2>Form Booking</h2>
                    <div class="line"></div>
                    <form class="form-booking">
                      <div class="row">
                        <div class="col">
                          <label for="FirstName">Nama Depan :</label>
                          <input type="text" id="FirstName" placeholder="Masukkan Nama Depan" name="NamaDepan" required>
                        </div>
                        <div class="col">
                          <label for="LastName">Nama Belakang</label>
                          <input type="text" id="LastName" placeholder="Masukkan Nama Belakang" name="NamaBelakang" required>
                        </div>
                      </div>

                      <label for="NIK">Foto Kartu Identitas</label>
                      <input type="file" id="foto-KTP" name="foto-KTP">

                      <label for="NIK">NIK</label>
                      <input type="text" id="NIK" placeholder="Masukkan Nomor Induk Kependudukan" name="NIK" required>

                      <label for="Alamat">Alamat</label>
                      <input type="text" id="Alamat" placeholder="Masukkan Alamat" name="Alamat"  required>
                      
                      <div class="row">
                        <div class="col">
                          <label for="Kota">Asal Kota</label>
                          <input type="text" id="Kota" placeholder="Masukkan Asal Kota" name="Kota" required>
                        </div>
                        <div class="col">
                          <label for="tanggal-lahir">Tanggal Lahir</label>
                      <input type="date" id="tanggal-lahir" name="tanggal-lahir" required>
                        </div>
                      </div>
                      <label for="Email">E-Mail</label>
                      <input type="text" id="Email" placeholder="Masukkan Email" name="Email" required>
                      
                      <label for="NoHp">Nomor Handphone</label>
                      <input type="text" id="NoHp" placeholder="Masukkan Nomor Handphone (whatsapp)" name="Nomor" required>

                    </form>
                  </div>

            </div>

          </div>

          <div class="col-xl-4">
            <div class="row">
              <div class="form1">

                <div class="informasi-paket">
                  <div class="informasi-paket-header">
                    <h2>Detail Paket</h2>
                    <div class="line"></div>

                    <h1 class="title">{{ $post->title }}</h1>
                    <p>Paket yang di pilih : Quad</p>
                    <div class="paket-item">
                      
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
                            <p class="right"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></p>
                          </div>
                        </div>
                      </div>

                      </div>
                  </div>
                </div>

              </div>
                
            </div>

            <div class="row">
              <div class="form2">
                <div class="harga-paket">
                  <h1>Konfirmasi Booking</h1>
                  <h2>Total :</h2>
                  <h3>Rp 68.000.000</h3>
  
  
                  <div class="booking-confirm">
                    <input type="checkbox" name="confirm" id="confirm" required>
                        <label for="confirm">Saya menyetujui persyaratan booking</label>
                  </div>
  
                        <button class="booking-btn">
                          Booking Sekarang
                        </button>
                </div>
              </div>
             
            </div>
              
            </div>
            
        </div>

        </div>
          
          
        </div>

    </section>
  </main>


<!-- ======= Footer ======= -->
@include('partials.footer')
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="../../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../../assets/vendor/aos/aos.js"></script>
  <script src="../../../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../../../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../../../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../../../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../../../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../../../assets/js/main.js"></script>

</body>
</html>