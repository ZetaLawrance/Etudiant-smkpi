<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Eternity Yours</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: SoftLand
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/softland-bootstrap-app-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1><a href="index.php">Eternity Yours</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="" href="index.php">Beranda</a></li>
          <li><a href="features.php">Fitur</a></li>
          <li><a href="pricing.php">Harga</a></li>
          <li><a class="active" href="design.php">Design</a></li>
          <li class="dropdown"><a href="#"><span>Akun Saya</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="wedding-1">Login</a></li>
            </ul>
          </li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Blog Section ======= -->
    <section class="hero-section inner-page">
      <div class="wave">

        <svg width="1920px" height="265px" viewBox="0 0 1920 265" version="1.1" xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink">
          <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
              <path
                d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,667 L1017.15166,667 L0,667 L0,439.134243 Z"
                id="Path"></path>
            </g>
          </g>
        </svg>

      </div>

      <div class="container">
        <div class="row align-items-center">
          <div class="col-12">
            <div class="row justify-content-center">
              <div class="col-md-7 text-center hero-text">
                <h1 data-aos="fade-up" data-aos-delay="">Order</h1>
                <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Place Your Order</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>

    <section>
      <div class="container">
        <br><br>
        <h3>Place Your Order</h3>
        <br><br>
        <div class="row">
          <div class="col-6">
            <form action="send.php" method="post" target="_blank">
              <div class="form-group">
                <label for="nama">Nama Pemesan</label>
                <input type="text" name="nama" class="form-control" placeholder="Upin">
              </div>
              <div class="form-group">
                <label for="mempelai_pria">Mempelai Pria</label>
                <input type="text" name="mempelai_pria" class="form-control" placeholder="Mail">
              </div>
              <div class="form-group">
                <label for="mempelai_wanita">Mempelai Wanita</label>
                <input type="text" name="mempelai_wanita" class="form-control" placeholder="Meimei">
              </div>
              <div class="form-group">
                <label for="nama">Tanggal Pernikahan</label>
                <input type="text" name="tgl_pernikahan" class="form-control" placeholder="19-9-1999">
              </div>
              <div class="form-group">
                <label for="desain">Desain</label>
                <input type="text" name="desain" class="form-control"
                  placeholder="Desain pertama dengan motif bunga berwarna biru">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Name@example.com">
              </div>
              <div class="form-group">
                <label for="catatan">Catatan</label>
                <textarea class="form-control" name="catatan" placeholder="Contoh: Warna teks nya saya ingin biru"
                  rows="10"></textarea>
              </div>
              <input type="hidden" name="noWa" value="6282316136928">
              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer class="footer" role="contentinfo">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-4 mb-md-0">
          <h3>About Eternity Yours</h3>
          <p>EternityYours adalah aplikasi pembuatan website undangan online terbaik buatan
            salah satu anak smk di kota bandung berjurusan pengembangan perangkat lunak dan gim.</p>
          <p class="social">
            <a href="https://www.instagram.com/reiikuzoo/"><span class="bi bi-twitter"></span></a>
            <a href="https://www.instagram.com/reiikuzoo/"><span class="bi bi-facebook"></span></a>
            <a href="https://www.instagram.com/reiikuzoo/"><span class="bi bi-instagram"></span></a>
            <a href="https://www.instagram.com/reiikuzoo/"><span class="bi bi-linkedin"></span></a>
          </p>
        </div>
        <div class="col-md-7 ms-auto">
          <div class="row site-section pt-0">
            <div class="col-md-4 mb-4 mb-md-0">
              <h3>Navigasi</h3>
              <ul class="list-unstyled">
                <li><a href="#">Harga</a></li>
                <li><a href="#">Fitur</a></li>
                <li><a href="#">Design</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
            <div class="col-md-4 mb-4 mb-md-0">
              <h3>Servis</h3>
              <ul class="list-unstyled">
                <li><a href="#">Team</a></li>
                <li><a href="#">Collaboration</a></li>
                <li><a href="#">Todos</a></li>
                <li><a href="#">Events</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="row justify-content-center text-center">
        <div class="col-md-7">
          <p class="copyright">&copy; Copyright Eternity Yours. All Rights Reserved</p>
          <div class="credits">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=SoftLand
          -->
            Designed by <a href="https://www.instagram.com/reiikuzoo/">Muhammad Raihan Faris</a>
          </div>
        </div>
      </div>

    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>