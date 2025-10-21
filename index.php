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

  <link rel="stylesheet" href="assets/css/nivo-lightbox.css">
  <link rel="stylesheet" href="assets/css/nivo-lightbox-theme/default/default.css">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">


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
          <li><a href="index.php" class="active">Home</a></li>
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

    <!-- Team Section -->
    <section id="team" class="team section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>PROFIL DAERAH</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-5">
          <div class="col-lg-4 col-md-6">
            <div class="team-member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="assets\img_T\team\gbr01.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <?php
                  include "config.php";
                  $hasil=mysqli_query($connect,"SELECT * FROM uraian WHERE id_uraian=1");
                  while($data=mysqli_fetch_row($hasil))
                  {
                    $judul=$data[1];
                      $uraian_singkat=$data[2];
                  }
                  ?>
                      <div class="caption">
                        <h3><?php echo $judul ?></h3>
                        <p><?php echo $uraian_singkat ?></p>
                  <p class="text-center">
                  <a href="page.php?id=1">Info Selengkapnya</a>
                  </p>
                </div>
              </div>
            </div>
          </div> <!-- End Team Member -->

          <div class="col-lg-4 col-md-6">
            <div class="team-member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="assets/img_T/team/gbr02.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <?php
                  $hasil=mysqli_query($connect,"SELECT * FROM uraian WHERE id_uraian=2");
                  while($data=mysqli_fetch_row($hasil))
                  {
                    $judul=$data[1];
                      $uraian_singkat=$data[2];
                  }
                  ?>
                      <div class="caption">
                        <h3><?php echo $judul ?></h3>
                        <p><?php echo $uraian_singkat ?></p>
                  <p class="text-center">
                  <a href="page.php?id=2">Info Selengkapnya</a>
                  </p>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6">
            <div class="team-member" data-aos="fade-up" data-aos-delay="400">
              <div class="member-img">
                <img src="assets\img_T\team\gbr03.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <?php
                  $hasil=mysqli_query($connect,"SELECT * FROM uraian WHERE id_uraian=3");
                  while($data=mysqli_fetch_row($hasil))
                  {
                    $judul=$data[1];
                      $uraian_singkat=$data[2];
                  }
                  ?>
                      <div class="caption">
                        <h3><?php echo $judul ?></h3>
                        <p><?php echo $uraian_singkat ?></p>
                  <p class="text-center">
                  <a href="page.php?id=3">Info Selengkapnya</a>
                  </p>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->
        </div>
      </div>

    </section><!-- /Team Section -->


    <!-- Projects Section -->
<section id="projects" class="projects section">
  <section id="services-alt" class="services-alt section light-background">
      <div class="container" data-aos="fade-up" data-aos-delay="100"> 
        <div class="row mt-5" data-aos="fade-up" data-aos-delay="400">
          <div class="col-lg-12 text-center">
            <div class="cta-section">
              <div class="container section-title" data-aos="fade-up">              
              <!-- Judul & Filter Tombol -->
              <div class="text-center mb-4">
                <h2>POTENSI DESA UNGGULAN</h2>
                <a href="#" data-filter=".tinanggea" class="btn-primary filter-btn active" >KELURAHAN TINANGGEA</a>
                <a href="#" data-filter=".bungin" class="btn-primary filter-btn">DESA BUNGIN PERMAI</a>
                <a href="#" data-filter=".torokeku" class="btn-primary filter-btn">DESA TORUKERU BARU</a>
                <a href="#" data-filter=".anuki" class="btn-primary filter-btn">DESA ANUKI</a>
              </div>  

              <div class="row gy-4"> <!-- pilihan gambar desa -->

                <div class="col-lg-4 col-md-6 portfolio-item tinanggea">
                  <div class="project-card">
                    <div class="project-image">
                      <a href="assets/img_T/portfolio/01-small.jpg" title="KELURAHAN TINANGGEA" data-lightbox-gallery="tinanggea">
                        <img src="assets/img_T/portfolio/01-small.jpg" alt="Project Title" class="img-fluid">
                        <div class="project-overlay">
                          <div class="project-actions">
                            <h2 style="color: #fff; text-shadow: 0 0 10px rgba(0,0,0,0.8);">PESISIR PANTAI</h2>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <!-- End Project tinanggea -->

                <div class="col-lg-4 col-md-6 portfolio-item tinanggea">
                  <div class="project-card">
                    <div class="project-image">
                      <a href="assets/img_T/portfolio/02-small.jpg" title="KELURAHAN TINANGGEA" data-lightbox-gallery="tinanggea">
                        <img src="assets/img_T/portfolio/02-small.jpg" alt="Project Title" class="img-fluid">
                        <div class="project-overlay">
                          <div class="project-actions">
                            <h2 style="color: #fff; text-shadow: 0 0 10px rgba(0,0,0,0.8);">KAWASAN KELURAHAN</h2>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <!-- End Project tinanggea -->
                <div class="col-lg-4 col-md-6 portfolio-item tinanggea">
                  <div class="project-card">
                    <div class="project-image">
                      <a href="assets/img_T/portfolio/03-small.jpg" title="KELURAHAN TINANGGEA" data-lightbox-gallery="tinanggea">
                        <img src="assets/img_T/portfolio/03-small.jpg" alt="Project Title" class="img-fluid">
                        <div class="project-overlay">
                          <div class="project-actions">
                            <h2 style="color: #fff; text-shadow: 0 0 10px rgba(0,0,0,0.8);">KANTOR KELURAHAN</h2>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <!-- End Project tinanggea -->
                <div class="col-lg-4 col-md-6 portfolio-item bungin">
                  <div class="project-card">
                    <div class="project-image">
                      <a href="assets/img_T/portfolio/04-small.jpg" title="DESA BUNGIN PERMAI" data-lightbox-gallery="bungin">
                        <img src="assets/img_T/portfolio/04-small.jpg" alt="Project Title" class="img-fluid">
                        <div class="project-overlay">
                          <div class="project-actions">
                            <h2 style="color: #fff; text-shadow: 0 0 10px rgba(0,0,0,0.8);">KAWASAN BUDIDAYA RUMPUT LAUT</h2>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <!-- End Project bungin -->
                <div class="col-lg-4 col-md-6 portfolio-item bungin">
                  <div class="project-card">
                    <div class="project-image">
                      <a href="assets/img_T/portfolio/05-small.jpg" title="DESA BUNGIN PERMAI" data-lightbox-gallery="bungin">
                        <img src="assets/img_T/portfolio/05-small.jpg" alt="Project Title" class="img-fluid">
                        <div class="project-overlay">
                          <div class="project-actions">
                            <h2 style="color: #fff; text-shadow: 0 0 10px rgba(0,0,0,0.8);">KOMUDITAS UNGGULAN RUMPUT LAUT</h2>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <!-- End Project bungin -->
                <div class="col-lg-4 col-md-6 portfolio-item bungin">
                  <div class="project-card">
                    <div class="project-image">
                      <a href="assets/img_T/portfolio/06-small.jpg" title="DESA BUNGIN PERMAI" data-lightbox-gallery="bungin">
                        <img src="assets/img_T/portfolio/06-small.jpg" alt="Project Title" class="img-fluid">
                        <div class="project-overlay">
                          <div class="project-actions">
                            <h2 style="color: #fff; text-shadow: 0 0 10px rgba(0,0,0,0.8);">SENTRA INDUSTRI MARITIM</h2>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <!-- End Project bungin -->
                <div class="col-lg-4 col-md-6 portfolio-item torokeku">
                  <div class="project-card">
                    <div class="project-image">
                      <a href="assets/img_T/portfolio/07-small.jpg" title="DESA TORUKERU BARU" data-lightbox-gallery="torokeku">
                        <img src="assets/img_T/portfolio/07-small.jpg" alt="Project Title" class="img-fluid">
                        <div class="project-overlay">
                          <div class="project-actions">
                            <h2 style="color: #fff; text-shadow: 0 0 10px rgba(0,0,0,0.8);">AREAL DESA</h2>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <!-- End Project Item -->
                <div class="col-lg-4 col-md-6 portfolio-item torokeku">
                  <div class="project-card">
                    <div class="project-image">
                      <a href="assets/img_T/portfolio/08-small.jpg" title="DESA TORUKERU BARU" data-lightbox-gallery="torokeku">
                        <img src="assets/img_T/portfolio/08-small.jpg" alt="Project Title" class="img-fluid">
                        <div class="project-overlay">
                          <div class="project-actions">
                            <h2 style="color: #fff; text-shadow: 0 0 10px rgba(0,0,0,0.8);">KAWASAN PENGOLAHAN RUMPUT LAUT</h2>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <!-- End Project Item -->
                <div class="col-lg-4 col-md-6 portfolio-item torokeku">
                  <div class="project-card">
                    <div class="project-image">
                      <a href="assets/img_T/portfolio/09-small.jpg" title="DESA TORUKERU BARU" data-lightbox-gallery="torokeku">
                        <img src="assets/img_T/portfolio/09-small.jpg" alt="Project Title" class="img-fluid">
                        <div class="project-overlay">
                          <div class="project-actions">
                            <h2 style="color: #fff; text-shadow: 0 0 10px rgba(0,0,0,0.8);">POTRET KAWASAN PESISIR</h2>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <!-- End Project Item -->
                <div class="col-lg-4 col-md-6 portfolio-item anuki">
                  <div class="project-card">
                    <div class="project-image">
                      <a href="assets/img_T/portfolio/10-small.jpg" title="DESA ANUKI" data-lightbox-gallery="anuki">
                        <img src="assets/img_T/portfolio/10-small.jpg" alt="Project Title" class="img-fluid">
                        <div class="project-overlay">
                          <div class="project-actions">
                            <h2 style="color: #fff; text-shadow: 0 0 10px rgba(0,0,0,0.8);">POTRET KAWASAN DESA</h2>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <!-- End Project Item -->
                <div class="col-lg-4 col-md-6 portfolio-item anuki">
                  <div class="project-card">
                    <div class="project-image">
                      <a href="assets/img_T/portfolio/11-small.jpg" title="DESA ANUKI" data-lightbox-gallery="anuki">
                        <img src="assets/img_T/portfolio/11-small.jpg" alt="Project Title" class="img-fluid">
                        <div class="project-overlay">
                          <div class="project-actions">
                            <h2 style="color: #fff; text-shadow: 0 0 10px rgba(0,0,0,0.8);">DAERAH PENGELOLAHAN RUMPUT LAUT</h2>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <!-- End Project Item -->
                <div class="col-lg-4 col-md-6 portfolio-item anuki">
                  <div class="project-card">
                    <div class="project-image">
                      <a href="assets/img_T/portfolio/12-small.jpg" title="DESA ANUKI" data-lightbox-gallery="anuki">
                        <img src="assets/img_T/portfolio/12-small.jpg" alt="Project Title" class="img-fluid">
                        <div class="project-overlay">
                          <div class="project-actions">
                            <h2 style="color: #fff; text-shadow: 0 0 10px rgba(0,0,0,0.8);">KANTOR KEPALA DESA</h2>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <!-- End Project Item -->
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
</section>


 <section id="certifications" class="certifications section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Anggota Kelompok</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-5 mt-6">
          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="certification-item">
              <div class="certification-badge">
                <img src="assets/img/construction/badge-1.webp" alt="ISO 9001 Certification" class="img-fluid">
              </div>
              <h4>Asraf Falaj Buntala</h4>
              <h4>E1E124030</h4>
              
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="certification-item">
              <div class="certification-badge">
                <img src="assets/img/construction/badge-2.webp" alt="OSHA Safety Certification" class="img-fluid">
              </div>
              <h4>Muh Rozzaaq Nura Ramadhan</h4>
               <h4>E1E124010</h4>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="certification-item">
              <div class="certification-badge">
                <img src="assets/img/construction/badge-3.webp" alt="Licensed Contractor" class="img-fluid">
              </div>
              <h4>La Ode Muhamad Ahlul Bait</h4>
               <h4>E1E124064</h4>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="certification-item">
              <div class="certification-badge">
                <img src="assets/img/construction/badge-4.webp" alt="Environmental Certification" class="img-fluid">
              </div>
               <h4>La Ode Afdal Munifa</h4>
               <h4>E1E124062</h4>
            </div>
          </div>

        </div>

        <div class="row gy-5 mt-4">

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="certification-item">
              <div class="certification-badge">
                <img src="assets/img/construction/badge-1.webp" alt="ISO 9001 Certification" class="img-fluid">
              </div>
               <h4>Muhammad Rafli Radiatul Zulfikar</h4>
               <h4>E1E124072</h4>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="certification-item">
              <div class="certification-badge">
                <img src="assets/img/construction/badge-2.webp" alt="OSHA Safety Certification" class="img-fluid">
              </div>
              <h4>Mikhael Abraham Widianto</h4>
               <h4>E1E124068</h4>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="certification-item">
              <div class="certification-badge">
                <img src="assets/img/construction/badge-3.webp" alt="Licensed Contractor" class="img-fluid">
              </div>
               <h4>La Ode Muhamad Indra Rukmana</h4>
               <h4>E1E124040</h4>
                </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="certification-item">
              <div class="certification-badge">
                <img src="assets/img/construction/badge-4.webp" alt="Environmental Certification" class="img-fluid">
              </div>
             <h4>Farid Khandra Ramadhan</h4>
               <h4>E1E124006</h4>
          </div>

        </div>

    </section><!-- /Certifications Section -->
<!-- hubungi kami -->

  <div class="container mt-5" data-aos="fade-up" data-aos-delay="100">
  <div class="row justify-content-center">
    <div class="col-lg-10">
      <div class="section-title" data-aos="fade-up">
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

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Nivo Lightbox -->
  <script type="text/javascript" src="Tugas1/assets/js/nivo-lightbox.js"></script>

  <!-- Isotope -->
  <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>


  <script>
    document.addEventListener('DOMContentLoaded', () => {
      // Inisialisasi Isotope
      const grid = document.querySelector('.row.gy-4');
      if (grid) {
        const iso = new Isotope(grid, {
          itemSelector: '.portfolio-item',
          layoutMode: 'fitRows'
        });

        // Tombol filter
        const filterBtns = document.querySelectorAll('.filter-btn');
        filterBtns.forEach(btn => {
          btn.addEventListener('click', function(e) {
            e.preventDefault(); // <--- ini penting untuk mencegah scroll ke atas
            
            const filterValue = this.getAttribute('data-filter');
            iso.arrange({ filter: filterValue });

            // Toggle kelas aktif
            filterBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
          });
        });
      }
    });

    document.addEventListener('DOMContentLoaded', function () {
      // Inisialisasi Isotope
      var iso = new Isotope('.row.gy-4', {
        itemSelector: '.portfolio-item',
        layoutMode: 'fitRows'
      });

      // Tampilkan hanya tinanggea saat load pertama
      iso.arrange({ filter: '.tinanggea' });

      // Tambahkan event klik ke tombol filter
      var filterBtns = document.querySelectorAll('.filter-btn');
      filterBtns.forEach(function (btn) {
        btn.addEventListener('click', function (e) {
          e.preventDefault();

          // Hapus active dari semua tombol
          filterBtns.forEach(function (el) {
            el.classList.remove('active');
          });

          // Tambahkan active ke tombol yang diklik
          this.classList.add('active');

          // Filter isotope
          var filterValue = this.getAttribute('data-filter');
          iso.arrange({ filter: filterValue });
        });
      });
    });

  $(document).ready(function(){
    $('a[data-lightbox-gallery]').nivoLightbox();
  });

  </script>

  



</body>

</html>
