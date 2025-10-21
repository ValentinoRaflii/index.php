<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = mysqli_real_escape_string($connect, $_POST['nama']);
    $alamat = mysqli_real_escape_string($connect, $_POST['alamat']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $organisasi = mysqli_real_escape_string($connect, $_POST['organisasi']);
    $pesan = mysqli_real_escape_string($connect, $_POST['pesan']);

    $query = "INSERT INTO tamu (nama, alamat, email, organisasi, pesan) 
              VALUES ('$nama', '$alamat', '$email', '$organisasi', '$pesan')";

    if (mysqli_query($connect, $query)) {
        echo "<script>alert('Pesan berhasil dikirim!'); window.location='page_input.php';</script>";
    } else {
        echo "Error: " . mysqli_error($connect);
    }

    mysqli_close($connect);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Contact - iConstruction Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="contact-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.php" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.webp" alt=""> -->
        <!-- <h3 class="sitename">Tinanggea.id</h3> -->
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php" class="">Home</a></li>
          <li><a href="page.php?id=4" class="">Topografi</a></li>
          <li><a href="page.php?id=5" class="">Batas Wilayah</a></li>
          <li><a href="page.php?id=6" class="">Pertumbuhan Penduduk</a></li>
          <li><a href="page_input.php" class="">Kontak</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted d-none d-sm-block" href="quote.php">Administration</a>

    </div>
  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img_T/DJI_0112.jpg);">
      <div class="container position-relative">
        <h1>Profile Kecamatan Tinanggea</h1>
        <p>Kabupaten Konawe Selatan</p>
      </div>
    </div><!-- End Page Title -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="contact-main-wrapper">
          <div class="map-wrapper">
            <iframe 
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4081.6300249783612!2d122.23221759947813!3d-4.463339774932262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2da28f5906221fef%3A0x833662c052f21c34!2sTinanggea!5e1!3m2!1sen!2sus!4v1760594551042!5m2!1sen!2sus" 
              width="100%" 
              height="100%" 
              style="border:0;" 
              allowfullscreen="" 
              loading="lazy" 
              referrerpolicy="no-referrer-when-downgrade">
            </iframe>
          </div>

          <div class="contact-content">
            <div class="contact-cards-container" data-aos="fade-up" data-aos-delay="300">
              <div class="contact-card">
                <div class="icon-box">
                  <i class="bi bi-geo-alt"></i>
                </div>
                <div class="contact-text">
                  <h4>Location</h4>
                  <p>Tinanggea, Sulawesi Tenggara, Indonesia</p>
                </div>
              </div>

              <div class="contact-card">
                <div class="icon-box">
                  <i class="bi bi-envelope"></i>
                </div>
                <div class="contact-text">
                  <h4>Email</h4>
                  <p>Tinaggea@gmail.com</p>
                </div>
              </div>

              <div class="contact-card">
                <div class="icon-box">
                  <i class="bi bi-telephone"></i>
                </div>
                <div class="contact-text">
                  <h4>Call</h4>
                  <p>+62 812-8617-9583</p>
                </div>
              </div>

              <div class="contact-card">
                <div class="icon-box">
                  <i class="bi bi-clock"></i>
                </div>
                <div class="contact-text">
                  <h4>Open Hours</h4>
                  <p>Monday–Friday: 9AM – 6PM</p>
                </div>
              </div>
            </div>

            <div class="contact-form-container" data-aos="fade-up" data-aos-delay="400">
              <h3>Jangan Raguu</h3>
              <p>Hubungi kami untuk informasi lebih lanjut atau kerja sama proyek di wilayah Tinanggea dan sekitarnya.</p>

           
            <form action="page_input.php" method="post">

  <div class="row">
    <!-- Nama -->
    <div class="col-md-6 form-group">
      <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama" required>
    </div>
    <!-- Alamat -->
    <div class="col-md-6 form-group mt-3 mt-md-0">
      <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" required>
    </div>
  </div>

  <div class="row mt-3">
    <!-- Email -->
    <div class="col-md-6 form-group">
      <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
    </div>
    <!-- Organisasi -->
    <div class="col-md-6 form-group mt-3 mt-md-0">
      <input type="text" class="form-control" name="organisasi" id="organisasi" placeholder="Organisasi" required>
    </div>
  </div>

  <!-- Pesan -->
  <div class="form-group mt-3">
    <textarea class="form-control" name="pesan" rows="5" placeholder="Pesan" required></textarea>
  </div>

 
  </div>

  <div class="text-center mt-3">
    <button type="submit" class="btn btn-primary btn-lg px-5">Kirim Pesan</button>
  </div>
</form>
    <div class="social-icons">
  <a href="#" title="Twitter"><i class="bi bi-twitter"></i></a>
  <a href="#" title="Facebook"><i class="bi bi-facebook"></i></a>
  <a href="#" title="Instagram"><i class="bi bi-instagram"></i></a>
  <a href="#" title="LinkedIn"><i class="bi bi-linkedin"></i></a>


            </div>
          </div>
        </div>
      </div>
    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer dark-background">
    <div class="container">
      <div class="row gy-5">
        <div class="col-lg-4">
          <div class="footer-brand">
            <a href="index.php" class="logo d-flex align-items-center mb-3">
              <span class="sitename">Tinanggea.id</span>
            </a>
            <p class="tagline">Profil Wilayah Kecamatan Tinanggea – Kabupaten Konawe Selatan.</p>
            <div class="social-links mt-4">
              <a href="#"><i class="bi bi-facebook"></i></a>
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
              <a href="#"><i class="bi bi-twitter-x"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="footer-links-grid">
            <div class="row">
              <div class="col-6 col-md-4">
                <h5>Informasi</h5>
                <ul class="list-unstyled">
                  <li><a href="about.php">Topografi</a></li>
                  <li><a href="services.php">Batas Wilayah</a></li>
                  <li><a href="projects.php">Pertumbuhan Penduduk</a></li>
                  <li><a href="quote.php">Administrasi</a></li>
                </ul>
              </div>
              <div class="col-6 col-md-4">
                <h5>Layanan</h5>
                <ul class="list-unstyled">
                  <li><a href="contact.php">Kontak</a></li>
                  <li><a href="#">Bantuan</a></li>
                  <li><a href="#">Kebijakan Privasi</a></li>
                  <li><a href="#">Syarat Layanan</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-2">
          <div class="footer-cta">
            <h5>Hubungi Kami</h5>
            <a href="page_input.php" class="btn btn-outline">$_POST in Touch</a>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="footer-bottom-content">
              <p class="mb-0">© <span class="sitename">Tinanggea.id</span>. All rights reserved.</p>
              <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
  </a>

  <div id="preloader"></div>

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/js/main.js"></script>

</body>
</html>
