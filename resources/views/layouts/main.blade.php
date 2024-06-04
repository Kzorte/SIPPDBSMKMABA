<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PPDB SMK MA'ARIF KOTA BATU</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Logo SMK -->
  <link href="assets/img/Favicon.png" rel="icon">
  <link href="assets/img/Favicon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Custon CSS Files -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index" class="logo d-flex align-items-center">
        <img src="assets/img/logo-smk.png" alt="">
        <span>PPDB</span>
      </a>

      @include('partials.navbar')

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Formulir Pendaftaran Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

      @yield('container')

      </div>
        
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.php" class="logo d-flex align-items-center">
              <img src="assets/img/logo-smk.png" alt="">
              <span>PPDB SMK Ma'arif Batu</span>
            </a>
            <p>Berkomitmen mencetak lulusan yang mempunyai kompetensi unggul, religius, siap kerja/kuliah dan berwirausaha</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Menu</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="/">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="pendaftaran">Formulir Pendaftaran</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#features">Tentang</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#contact">Kontak</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Jurusan Kami</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Teknik dan Bisnis Sepeda Motor</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Teknik Kendaraan Ringan Otomotif</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Teknik Audio dan Video</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Rekayasa Perangkat Lunak</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Asisten Keperawatan</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Desain Komunikasi Visual</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Kontak Kami</h4>
            <p>
              <b>Kampus 1 :</b> 
              Jalan Panderman No. 26 Kelurahan Sisir Kecamatan Batu Kota Batu <br>
              <b>Kampus 2 :</b> 
              Jalan Oro - Oro Ombo (Belakang Batu Night Spectacular BNS) <br>
              <strong>Telephone:</strong> 0341 511 021<br>
              <strong>Email:</strong> smkmaarifbatu.sch.id@gmail.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>2024 SMK Ma'arif Batu</span></strong> All Rights Reserved
      </div>
      <div class="credits">
        Develop by <a href="https://smkmaarifbatu.sch.id/">RPL SMK Ma'arif Batu</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <!-- Custom JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
  <script>
      $('.dropify').dropify({
          messages: {
                default: 'Drag or upload your file here',
              replace: 'Drag or upload your file here',
              remove:  'Remove',
              error:   'Error, Check your image properties'
          },
       });
  </script>

</body>

</html>