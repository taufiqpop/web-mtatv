<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MTATV || Talkshow</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicon -->
  <link href="asset/images/favicon/logo.ico" rel="icon">
  <link href="asset/images/favicon/logo.ico" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- CSS -->
  <link href="asset/css/animate/animate.min.css" rel="stylesheet">
  <link href="asset/css/aos/aos.css" rel="stylesheet">
  <link href="asset/css/bootstrap/bootstrap.min.css" rel="stylesheet">
  <link href="asset/css/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="asset/css/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="asset/css/glightbox/glightbox.min.css" rel="stylesheet">
  <link href="asset/css/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="asset/css/features/sosmed.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Main CSS -->
  <link href="asset/css/style.css" rel="stylesheet">

</head>

<body>
  <!-- Top Bar -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-clock d-flex align-items-center ms-4">
          <span>
            <?php
            // Time Zone
            date_default_timezone_set('Asia/Jakarta');
            $hariIni = new DateTime();
            echo $hariIni->format('l, d F Y (H:i A)')
            ?>
          </span>
        </i>
      </div>
    </div>
  </div>

  <!-- Header -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">
      <a href="index.html" class="logo me-auto me-lg-0"><img src="asset/images/MTATV.png" alt="MTATV" title="MTATV" class="img-fluid"></a>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="index.php" title="Home">Home</a></li>
          <li><a class="nav-link scrollto" href="index.php#about" title="About">About</a></li>
          <li><a class="nav-link scrollto" href="program.php" title="Program">Program</a></li>
          <li><a class="nav-link scrollto active" href="talkshow.php" title="Talkshow">Talkshow</a></li>
          <li><a class="nav-link scrollto" href="jihad-pagi.php" title="Jihad Pagi">Jihad Pagi</a></li>
          <li><a class="nav-link scrollto" href="documentary.php" title="Documentary">Documentary</a></li>
          <li><a class="nav-link scrollto" href="jadwal-acara.php" title="Jadwal Acara">Jadwal Acara</a></li>
          <li><a class="nav-link scrollto" href="crew-mtatv.php" title="Crew">Crew</a></li>
          <li><a class="nav-link scrollto" href="index.php#contact" title="Contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

      <a href="https://www.youtube.com/c/OfficialMTATV/live" target="_blank" class="book-a-table-btn scrollto d-none d-lg-flex" title="Live Streaming">Live Streaming</a>
    </div>
  </header>

  <!-- Blank -->
  <div class="container">
    <br><br><br>
  </div>

  <!-- Talkshow -->
  <main id="main">
    <section class="specials">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Talkshow</h2>
          <p>Talkshow</p>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link active" data-bs-toggle="tab" href="#all" title="All">All</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#hikmah" title="Hikmah">Hikmah</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#jalandakwah" title="Meniti Jalan Dakwah">Meniti Jalan Dakwah</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#mitratani" title="Mitra Tani">Mitra Tani</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#prestasi" title="Prestasi">Prestasi</a>
            </li>
          </ul>
        </div>
        <hr data-aos="fade-up" data-aos-delay="150">
        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">
          <!-- All -->
          <div class="tab-pane active show" id="all">
            <div class="container">
              <div class="row">
                <table class="table table-bordered table-dark">
                  <thead style="text-align: center;">
                    <tr>
                      <td><iframe width="100%" height="400px" src="https://www.youtube.com/embed/z1VM47lr6XQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                    </tr>
                    <tr>
                      <td><iframe width="100%" height="400px" src="https://www.youtube.com/embed/TAkHbT2cqjM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                    </tr>
                    <tr>
                      <td><iframe width="100%" height="400px" src="https://www.youtube.com/embed/eJJNb35EulE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                    </tr>
                    <tr>
                      <td><iframe width="100%" height="400px" src="https://www.youtube.com/embed/Fb2BD902s70" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                    </tr>
                    <tr>
                      <td><iframe width="100%" height="400px" src="https://www.youtube.com/embed/5Ml5Mc6M8Pc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                    </tr>
                    <tr>
                      <td><iframe width="100%" height="400px" src="https://www.youtube.com/embed/yRa9lwwTEXc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                    </tr>
                    <tr>
                      <td><iframe width="100%" height="400px" src="https://www.youtube.com/embed/qeq6iuXxvA0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                    </tr>
                    <tr>
                      <td><iframe width="100%" height="400px" src="https://www.youtube.com/embed/P_n_8pLrhQY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                    </tr>
                    <tr>
                      <td><iframe width="100%" height="400px" src="https://www.youtube.com/embed/luRskhIXnAs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                    </tr>
                    <tr>
                      <td><iframe width="100%" height="400px" src="https://www.youtube.com/embed/rYeGJezBjAU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                    </tr>
                    <tr>
                      <td><iframe width="100%" height="400px" src="https://www.youtube.com/embed/HuZoctebmnA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                    </tr>
                    <tr>
                      <td><iframe width="100%" height="400px" src="https://www.youtube.com/embed/UR5fmLfMyKo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                    </tr>
                    <tr>
                      <td><iframe width="100%" height="400px" src="https://www.youtube.com/embed/Q40_h4UuzXA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                    </tr>
                    <tr>
                      <td><iframe width="100%" height="400px" src="https://www.youtube.com/embed/JcSgVFOnGrg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                    </tr>
                    <tr>
                      <td><iframe width="100%" height="400px" src="https://www.youtube.com/embed/J_M-Qy5X9Ds" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                    </tr>
                    <tr>
                      <td><iframe width="100%" height="400px" src="https://www.youtube.com/embed/PymsELUnpcw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                    </tr>
                    <tr>
                      <td><iframe width="100%" height="400px" src="https://www.youtube.com/embed/34Ey-YQrQvw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                    </tr>
                    <tr>
                      <td><iframe width="100%" height="400px" src="https://www.youtube.com/embed/TORCxtaz6R8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                    </tr>
                  </thead>
                </table>
              </div>
            </div>
          </div>

          <!-- Hikmah -->
          <div class="tab-pane" id="hikmah">
            <div class="container">
              <div class="row">
                <table class="table table-bordered table-dark">
                  <thead style="text-align: center;">
                    <tr>
                      <td><iframe width="100%" height="400px" src="https://www.youtube.com/embed/z1VM47lr6XQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                    </tr>
                    <tr>
                      <td><iframe width="100%" height="400px" src="https://www.youtube.com/embed/TAkHbT2cqjM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                    </tr>
                    <tr>
                      <td><iframe width="100%" height="400px" src="https://www.youtube.com/embed/eJJNb35EulE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                    </tr>
                    <tr>
                      <td><iframe width="100%" height="400px" src="https://www.youtube.com/embed/Fb2BD902s70" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                    </tr>
                    <tr>
                      <td><iframe width="100%" height="400px" src="https://www.youtube.com/embed/5Ml5Mc6M8Pc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                    </tr>
                    <tr>
                      <td><iframe width="100%" height="400px" src="https://www.youtube.com/embed/yRa9lwwTEXc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                    </tr>
                  </thead>
                </table>
              </div>
            </div>
          </div>

          <!-- Meniti Jalan Dakwah -->
          <div class="tab-pane" id="jalandakwah">
            <div class="container">
              <div class="row">
                <table class="table table-bordered table-dark">
                  <thead style="text-align: center;">
                    <tr>
                      <td><iframe width="100%" height="400px" src="https://www.youtube.com/embed/qeq6iuXxvA0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                    </tr>
                  </thead>
                </table>
              </div>
            </div>
          </div>

          <!-- Mitra Tani -->
          <div class="tab-pane" id="mitratani">
            <div class="container">
              <div class="row">
                <table class="table table-bordered table-dark">
                  <thead style="text-align: center;">
                    <tr>
                      <td><iframe width="100%" height="400px" src="https://www.youtube.com/embed/P_n_8pLrhQY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                    </tr>
                    <tr>
                      <td><iframe width="100%" height="400px" src="https://www.youtube.com/embed/luRskhIXnAs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                    </tr>
                    <tr>
                      <td><iframe width="100%" height="400px" src="https://www.youtube.com/embed/rYeGJezBjAU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                    </tr>
                    <tr>
                      <td><iframe width="100%" height="400px" src="https://www.youtube.com/embed/HuZoctebmnA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                    </tr>
                    <tr>
                      <td><iframe width="100%" height="400px" src="https://www.youtube.com/embed/UR5fmLfMyKo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                    </tr>
                    <tr>
                      <td><iframe width="100%" height="400px" src="https://www.youtube.com/embed/Q40_h4UuzXA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                    </tr>
                    <tr>
                      <td><iframe width="100%" height="400px" src="https://www.youtube.com/embed/JcSgVFOnGrg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                    </tr>
                    <tr>
                      <td><iframe width="100%" height="400px" src="https://www.youtube.com/embed/J_M-Qy5X9Ds" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                    </tr>
                  </thead>
                </table>
              </div>
            </div>
          </div>

          <!-- Prestasi -->
          <div class="tab-pane" id="prestasi">
            <div class="container">
              <div class="row">
                <table class="table table-bordered table-dark">
                  <thead style="text-align: center;">
                    <tr>
                      <td><iframe width="100%" height="400px" src="https://www.youtube.com/embed/PymsELUnpcw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                    </tr>
                    <tr>
                      <td><iframe width="100%" height="400px" src="https://www.youtube.com/embed/34Ey-YQrQvw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                    </tr>
                    <tr>
                      <td><iframe width="100%" height="400px" src="https://www.youtube.com/embed/TORCxtaz6R8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                    </tr>
                  </thead>
                </table>
              </div>
            </div>
          </div>

          <!-- Break -->
        </div>
      </div>
    </section>
  </main>

  <!-- Social Media -->
  <div class="icon-bar">
    <a href="https://www.facebook.com/mtatvofficial/" class="facebook" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a>
    <a href="https://www.instagram.com/mtatv_official/" class="instagram" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a>
    <a href="https://www.youtube.com/officialmtatv/" class="youtube" target="_blank" title="Youtube"><i class="fa fa-youtube"></i></a>
  </div>

  <!-- Footer -->
  <footer id="footer">
    <!-- Copyright -->
    <div class="container">
      <div class="copyright">
        Copyright &copy; <?php echo date("Y"); ?> <strong><span>MTATV</span></strong>
      </div>
      <div class="credits"></div>
    </div>
  </footer>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- JavaScript -->
  <script src="asset/js/aos/aos.js"></script>
  <script src="asset/js/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="asset/js/glightbox/glightbox.min.js"></script>
  <script src="asset/js/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="asset/js/swiper/swiper-bundle.min.js"></script>
  <script src="asset/js/php-email-form/validate.js"></script>

  <!-- Main JS -->
  <script src="asset/js/main.js"></script>

</body>

</html>