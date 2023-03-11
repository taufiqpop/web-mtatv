<!DOCTYPE html>

<!--
  Developer :
  Saeful Pamungkas (L200190034)
  Sigit Budi Utomo (L200190084)
  Muhammad Nur Taufiq (L200190085)
-->

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>MTATV</title>
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
          <li><a class="nav-link scrollto active" href="#hero" title="Home">Home</a></li>
          <li><a class="nav-link scrollto" href="#about" title="About">About</a></li>
          <li><a class="nav-link scrollto" href="program.php" title="Program">Program</a></li>
          <li><a class="nav-link scrollto" href="talkshow.php" title="Talkshow">Talkshow</a></li>
          <li><a class="nav-link scrollto" href="jihad-pagi.php" title="Jihad Pagi">Jihad Pagi</a></li>
          <li><a class="nav-link scrollto" href="documentary.php" title="Documentary">Documentary</a></li>
          <li><a class="nav-link scrollto" href="jadwal-acara.php" title="Jadwal Acara">Jadwal Acara</a></li>
          <li><a class="nav-link scrollto" href="crew-mtatv.php" title="Crew">Crew</a></li>
          <li><a class="nav-link scrollto" href="#contact" title="Contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

      <!-- Live Streaming -->
      <a href="https://www.youtube.com/c/OfficialMTATV/live" target="_blank" class="book-a-table-btn scrollto d-none d-lg-flex" title="Live Streaming">Live Streaming</a>
    </div>
  </header>

  <!-- Home -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Welcome To <span>MTATV</span></h1>
          <h2>Channel Terpilih</h2>
          <div class="btns">
            <a href="jihad-pagi.php" class="btn-menu animated fadeInUp scrollto" title="Jihad Pagi">Jihad Pagi</a>
            <a href="jadwal-acara.php" class="btn-book animated fadeInUp scrollto" title="Jadwal Acara">Jadwal Acara</a>
          </div>
        </div>

        <!-- Play Button -->
        <!-- <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
            <a href="" class="glightbox play-btn" title="Live Streaming"></a>
          </div> -->
      </div>
    </div>
  </section>

  <main id="main">
    <!-- About -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>About</h2>
          <p>About Us</p>
          <div style="text-align: justify; text-indent: 60px;">
            MTATV merupakan Yayasan Majlis Tafsir Al-Qur'an (MTA) adalah sebuah lembaga pendidikan dan dakwah Islamiyah. MTATV sebagai salah satu media dakwah MTA.
          </div>
          <br>
          <div style="text-align: center;">
            <a href="https://mta.or.id/profil/"><button type="button" class="btn btn-warning"><strong>Read More</strong></button></a>
          </div>
        </div>
      </div>
    </section>

    <!-- Google Maps -->
    <section id="gmaps">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Location</h2>
          <p>Google Maps</p>
        </div>
      </div>
      <div class="container" data-aos="fade-up">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2796.552778091334!2d110.83165028975012!3d-7.583375065466894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a164195bf3a09%3A0xd1de24b044e1a72d!2sMTATV!5e0!3m2!1sen!2sid!4v1646200494554!5m2!1sen!2sid" width="100%" height="100%" frameborder="1" style="border: 1px;" allowfullscreen></iframe>
      </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>
      </div>
      <div class="container" data-aos="fade-up">
        <!-- Contact Person -->
        <div class="row mt-3">
          <div class="col-lg-4">
            <div class="info">
              <div class="address" title="Lokasi">
                <i class="bi bi-geo-alt"></i>
                <h4>Location :</h4>
                <p>Jl. Serayu No.12, Semanggi, Kec. Ps. Kliwon, Kota Surakarta, Jawa Tengah (57117)</p>
              </div>
              <div class="email">
                <i class="bi bi-envelope" title="Email"></i>
                <h4>Email :</h4>
                <p>officialmtatv@gmail.com</p>
              </div>
              <div class="phone">
                <i class="bi bi-phone" title="Telp/Fax"></i>
                <h4>Telp/Fax :</h4>
                <p>(0271) 679 4000</p>
              </div>
              <div class="phone">
                <i class="bi bi-currency-dollar" title="Marketing & Adv"></i>
                <h4>Marketing & Adv :</h4>
                <p>0852-9299-9906</p>
              </div>
              <div class="phone">
                <i class="bi bi-mic-fill" title="On Air"></i>
                <h4>On Air :</h4>
                <p>(0271) 679 3000</p>
              </div>
              <div class="phone">
                <i class="bi bi-whatsapp" title="SMS/WA"></i>
                <h4>SMS/WA :</h4>
                <p>0811-2553-000</p>
              </div>
            </div>
          </div>

          <!-- Forms -->
          <div class="col-lg-8 mt-5 mt-lg-0">
            <form action="forms/contact.php" method="POST" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nama" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Judul" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="8" placeholder="Pesan" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
            </form>
          </div>
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
    <div class="container">
      <div class="copyright" title="Copyright">
        Copyright &copy; <?php echo date("Y"); ?> <strong><span>MTATV</span></strong>
      </div>
    </div>
  </footer>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center" title="Back To Top"><i class="bi bi-arrow-up-short"></i></a>

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