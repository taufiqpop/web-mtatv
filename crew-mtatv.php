<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MTATV || Crew</title>
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
          <li><a class="nav-link scrollto" href="talkshow.php" title="Talkshow">Talkshow</a></li>
          <li><a class="nav-link scrollto" href="jihad-pagi.php" title="Jihad Pagi">Jihad Pagi</a></li>
          <li><a class="nav-link scrollto" href="documentary.php" title="Documentary">Documentary</a></li>
          <li><a class="nav-link scrollto" href="jadwal-acara.php" title="Jadwal Acara">Jadwal Acara</a></li>
          <li><a class="nav-link scrollto active" href="crew-mtatv.php" title="Crew">Crew</a></li>
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
  <!-- Crew MTATV -->
  <main id="main" class="specials">
    <section id="crew" class="chefs">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Crew</h2>
          <p>Crew MTA TV</p>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link active" data-bs-toggle="tab" href="#all" title="All">All</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#penyiar" title="Penyiar">Penyiar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#editor" title="Editor">Editor</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#mcr" title="Master Control Room">MCR</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#cameraman" title="Cameraman">Cameraman</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#produser" title="Produser">Produser</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#desainer" title="Desainer">Desainer</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#it" title="IT">IT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#logistik" title="Logistik">Logistik</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#driver" title="Driver">Driver</a>
            </li>
          </ul>
        </div>
        <hr data-aos="fade-up" data-aos-delay="150">
        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">
          <!-- All -->
          <div class="tab-pane active show" id="all">
            <div class="row">
              <!-- Crew 2007 1 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/tahun/2007/Crew 2007 (1).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Rudi Herfianto B. S.</h4>
                      <span>Manager</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Crew 2007 2 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/tahun/2007/Crew 2007 (2).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Akhmad Harmoko</h4>
                      <span>Manager</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Crew 2007 3 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/tahun/2007/Crew 2007 (3).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Alexander Miftahul F.</h4>
                      <span>Penyiar</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Crew 2007 4 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/tahun/2007/Crew 2007 (4).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Irwanto Firmansyah</h4>
                      <span>Penyiar</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Crew 2007 5 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/tahun/2007/Crew 2007 (5).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Rochmawati S. S.</h4>
                      <span>Manager</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Crew 2007 6 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/tahun/2007/Crew 2007 (6).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Kukuh Wibowo</h4>
                      <span>Manager</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Crew 2007 7 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/tahun/2007/Crew 2007 (7).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>M. Darman</h4>
                      <span>Manager</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Crew 2007 8 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/tahun/2007/Crew 2007 (8).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Heri Yunianto</h4>
                      <span>Penyiar</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Crew 2007 9 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/tahun/2007/Crew 2007 (9).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Windi Hartanto</h4>
                      <span>Editor</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Crew 2009 1 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/tahun/2009/Crew 2009 (1).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Tommy P.</h4>
                      <span>Penyiar</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Crew 2014 1 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/tahun/2014/Crew 2014 (1).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Khaliq Ivan M.</h4>
                      <span>Manager</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Crew 2014 2 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/tahun/2014/Crew 2014 (2).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Anda Prasetyo</h4>
                      <span>Produser</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Crew 2014 3 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/tahun/2014/Crew 2014 (3).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Arifin</h4>
                      <span>Editor</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Crew 2014 4 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/tahun/2014/Crew 2014 (4).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Arif Nur Rohman</h4>
                      <span>Cameraman</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Crew 2014 5 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/tahun/2014/Crew 2014 (5).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Abdul Wahid</h4>
                      <span>Cameraman</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Crew 2014 6 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/tahun/2014/Crew 2014 (6).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>S. Aji Nugroho</h4>
                      <span>Manager</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Crew 2015 1 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/tahun/2015/Crew 2015 (1).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Faatih Hakiyil M.</h4>
                      <span>Editor</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Crew 2015 2 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/tahun/2015/Crew 2015 (2).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Habiburohman</h4>
                      <span>MCR</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Crew 2015 3 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/tahun/2015/Crew 2015 (3).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Fajar Adi N.</h4>
                      <span>MCR</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Crew 2015 4 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/tahun/2015/Crew 2015 (4).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Radkha Fatchur R.</h4>
                      <span>Editor</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Crew 2015 5 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/tahun/2015/Crew 2015 (5).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Dinda R.</h4>
                      <span>Editor</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Crew 2015 6 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/tahun/2015/Crew 2015 (6).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Nurul Efendi</h4>
                      <span>Manager</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Crew 2016 1 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/tahun/2016/Crew 2016 (1).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Tri Idayati</h4>
                      <span>Penyiar</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Crew 2016 2 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/tahun/2016/Crew 2016 (2).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Siti Fatimah</h4>
                      <span>Manager</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Crew 2016 3 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/tahun/2016/Crew 2016 (3).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Ahmad Nasrudin</h4>
                      <span>IT</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Crew 2016 4 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/tahun/2016/Crew 2016 (4).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Rozain Taslih</h4>
                      <span>Editor</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Crew 2017 1 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/tahun/2017/Crew 2017 (1).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Hariyanto</h4>
                      <span>Desainer</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Crew 2018 1 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/tahun/2018/Crew 2018 (1).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Abdul Rosyid R.</h4>
                      <span>MCR</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Crew 2018 2 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/tahun/2018/Crew 2018 (2).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Hasan Anur M.</h4>
                      <span>MCR</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Crew 2018 3 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/tahun/2018/Crew 2018 (3).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Gunawan</h4>
                      <span>Manager</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Crew 2018 4 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/tahun/2018/Crew 2018 (4).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Edy Irianto</h4>
                      <span>Cameraman</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Crew 2019 1 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/tahun/2019/Crew 2019 (1).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>M. Chabib Taslimi</h4>
                      <span>Manager</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Crew 2019 2 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/tahun/2019/Crew 2019 (2).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Muhamad Hasan</h4>
                      <span>Manager</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Crew 2019 3 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/tahun/2019/Crew 2019 (3).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Afrizal Mukharom</h4>
                      <span>MCR</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Crew 2019 4 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/tahun/2019/Crew 2019 (4).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Sunarto</h4>
                      <span>Logistik</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Crew 2019 5 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/tahun/2019/Crew 2019 (5).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>W. Duta Dewanto</h4>
                      <span>Driver</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Crew 2019 6 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/tahun/2019/Crew 2019 (6).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Nurul Khasanah</h4>
                      <span>Manager</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Crew 2020 1 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/tahun/2020/Crew 2020 (1).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Wahid Arrifudin</h4>
                      <span>Manager</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Crew 2020 2 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/tahun/2020/Crew 2020 (2).jpeg" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Wahid Nur Rifa'i</h4>
                      <span>Manager</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Crew 2020 3 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/tahun/2020/Crew 2020 (3).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Ainur Rasydah</h4>
                      <span>Penyiar</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Crew 2020 4 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/tahun/2020/Crew 2020 (4).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Sri Kusumastuti</h4>
                      <span>Penyiar</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Crew 2020 5 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/tahun/2020/Crew 2020 (5).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Nurhayati</h4>
                      <span>Manager</span>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Break -->
            </div>
          </div>

          <!-- Penyiar -->
          <div class="tab-pane" id="penyiar">
            <div class="row">
              <!-- Crew Penyiar 1 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/jobdesk/penyiar/penyiar (1).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Alexander Miftahul F.</h4>
                      <span>Penyiar</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Crew Penyiar 2 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/jobdesk/penyiar/penyiar (2).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Irwanto Firmansyah</h4>
                      <span>Penyiar</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Crew Penyiar 3 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/jobdesk/penyiar/penyiar (3).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Heri Yunianto</h4>
                      <span>Penyiar</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Crew Penyiar 4 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/jobdesk/penyiar/penyiar (4).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Tommy P.</h4>
                      <span>Penyiar</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Crew Penyiar 5 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/jobdesk/penyiar/penyiar (5).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Tri Idayati</h4>
                      <span>Penyiar</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Crew Penyiar 6 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/jobdesk/penyiar/penyiar (6).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Ainur Rasydah</h4>
                      <span>Penyiar</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Crew Penyiar 7 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/jobdesk/penyiar/penyiar (7).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Sri Kusumastuti</h4>
                      <span>Penyiar</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Editor -->
          <div class="tab-pane" id="editor">
            <div class="row">
              <!-- Crew Editor 1 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/jobdesk/editor/editor (1).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Windi Hartanto</h4>
                      <span>Editor</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Crew Editor 2 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/jobdesk/editor/editor (2).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Arifin</h4>
                      <span>Editor</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Crew Editor 3 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/jobdesk/editor/editor (3).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Faatih Hakiyil M.</h4>
                      <span>Editor</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Crew Editor 4 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/jobdesk/editor/editor (4).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Radkha Fatchur R.</h4>
                      <span>Editor</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Crew Editor 5 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/jobdesk/editor/editor (5).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Dinda R.</h4>
                      <span>Editor</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Crew Editor 6 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/jobdesk/editor/editor (6).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Rozain Taslih</h4>
                      <span>Editor</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- MCR -->
          <div class="tab-pane" id="mcr">
            <div class="row">
              <!-- Crew MCR 1 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/jobdesk/mcr/mcr (1).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Habiburohman</h4>
                      <span>MCR</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Crew MCR 2 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/jobdesk/mcr/mcr (2).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Fajar Adi N.</h4>
                      <span>MCR</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Crew MCR 3 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/jobdesk/mcr/mcr (3).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Abdul Rosyid R.</h4>
                      <span>MCR</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Crew MCR 4 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/jobdesk/mcr/mcr (4).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Hasan Anur M.</h4>
                      <span>MCR</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Crew MCR 5 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/jobdesk/mcr/mcr (5).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Afrizal Mukharom</h4>
                      <span>MCR</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Cameraman -->
          <div class="tab-pane" id="cameraman">
            <div class="row">
              <!-- Crew Cameraman 1 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/jobdesk/cameraman/cameraman (1).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Arif Nur Rohman</h4>
                      <span>Cameraman</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Crew Cameraman 2 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/jobdesk/cameraman/cameraman (2).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Abdul Wahid</h4>
                      <span>Cameraman</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Crew Cameraman 3 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/jobdesk/cameraman/cameraman (3).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Edy Irianto</h4>
                      <span>Cameraman</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Produser -->
          <div class="tab-pane" id="produser">
            <div class="row">
              <!-- Crew Produser 1 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/jobdesk/produser/produser (1).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Anda Prasetyo</h4>
                      <span>Produser</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Desainer -->
          <div class="tab-pane" id="desainer">
            <div class="row">
              <!-- Crew Desainer 1 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/jobdesk/desainer/desainer (1).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Hariyanto</h4>
                      <span>Desainer</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- IT -->
          <div class="tab-pane" id="it">
            <div class="row">
              <!-- Crew IT 1 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/jobdesk/it/it (1).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Ahmad Nasrudin</h4>
                      <span>IT</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Logistik -->
          <div class="tab-pane" id="logistik">
            <div class="row">
              <!-- Crew Logistik 1 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/jobdesk/logistik/logistik (1).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Sunarto</h4>
                      <span>Logistik</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Driver -->
          <div class="tab-pane" id="driver">
            <div class="row">
              <!-- Crew Driver 1 -->
              <div class="col-lg-2 col-sm-2">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <img src="asset/images/crew-mtatv/jobdesk/driver/driver (1).png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>W. Duta Dewanto</h4>
                      <span>Driver</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Break -->
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