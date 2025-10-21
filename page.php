<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>index-kecamatan tinanggea</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iConstruction
  * Template URL: https://bootstrapmade.com/iconstruction-bootstrap-construction-template/
  * Updated: Jul 27 2025 with Bootstrap v5.3.7
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
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

    <?php
      $id=$_GET["id"];
      
      include "config.php";
      $hasil=mysqli_query($connect,"SELECT * FROM uraian WHERE id_uraian='".$id."'");
      while($data=mysqli_fetch_row($hasil))
      {
        $judul=$data[1];
        $photo=$data[4];
        $uraian=$data[3];
      }
      ?>
      <div id="about">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-md-6 ">
              <div class="main-image mt-5">
                <?php echo "<img src='assets/img_T/".$photo."' class='member-img' alt='' >";?>  
              </div>
            </div>
            <div class="col-xs-12 col-md-6">
              <div class="about-text mt-5">
                <h2><?php	echo $judul; ?></h2>
                <hr>
                <p><?php	echo $uraian;?></p>
            <p><a href="index.php">Kembali</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>


    <!-- Projects Section -->
<!-- hubungi kami -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="container section-title" data-aos="fade-up">
          <h2>HUBUNGI KAMI</h2>
        </div>
      </div>
    </div>
  </div><!-- hubungi kami-->

  </main>
<!-- email dan kontak -->
<footer id="footer" class="footer dark-background call-to-action">
  <div class="container">
    <!-- Contact Details -->
    <div class="achievements-grid">
      <div class="achievement-item" data-aos="zoom-in" data-aos-delay="100">
        <div class="contact-details">
          <i class="bi bi-telephone-fill"></i>
        </div>
        <div class="achievement-info">
          <span>0812-4553-0549</span>
        </div>
      </div>
      <!-- Contact Email -->
      <div class="achievement-item" data-aos="zoom-in" data-aos-delay="100">
        <div class="contact-details">
          <i class="bi bi-envelope-fill"></i>
        </div>
        <div class="achievement-info">
          <span>Inefausayana@ymail.com</span>
        </div>
      </div>
    </div>
  </div>
      <div class="footer-credit text-center mt-4" data-aos="zoom-in" data-aos-delay="100">
        <h5>Develop by q-benks Production</h5>
        <p>kendari 2018</p>
      </div>
</footer><!-- email dan kontak -->

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
