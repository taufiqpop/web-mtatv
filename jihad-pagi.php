<?php
require("koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MTATV || Jihad Pagi</title>
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
                    <li><a class="nav-link scrollto active" href="jihad-pagi.php" title="Jihad Pagi">Jihad Pagi</a></li>
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

    <!-- Jihad Pagi -->
    <main id="main">

        <section class="specials">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Kajian Ahad Pagi</h2>
                    <p>Jihad Pagi</p>
                </div>
                <!-- Tahun -->
                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#tahun2020" title="2020">2020</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tahun2021" title="2021">2021</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tahun2022" title="2022">2022</a>
                        </li>
                    </ul>
                </div>
                <hr data-aos="fade-up" data-aos-delay="200">
                <div class="tab-content" data-aos="fade-up" data-aos-delay="100">
                    <!-- 2020 -->
                    <div class="tab-pane active show" id="tahun2020">
                        <div class="row">
                            <!-- Bulan -->
                            <div class="col-lg-auto">
                                <div class="row" data-aos="fade-up" data-aos-delay="100">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#januari2020" title="Januari">Januari</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#februari2020" title="Februari">Februari</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#maret2020" title="Maret">Maret</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#april2020" title="April">April</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#mei2020" title="Mei">Mei</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#juni2020" title="Juni">Juni</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#juli2020" title="Juli">Juli</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#agustus2020" title="Agustus">Agustus</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" disabled="disabled" disabled="disabled" style="color: grey;" href="#september2020" title="September">September</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" disabled="disabled" disabled="disabled" style="color: grey;" href="#oktober2020" title="Oktober">Oktober</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#november2020" title="November">November</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#desember2020" title="Desember">Desember</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 2021 -->
                    <div class="tab-pane" id="tahun2021">
                        <div class="row">
                            <!-- Bulan -->
                            <div class="col-lg-auto">
                                <div class="row" data-aos="fade-up" data-aos-delay="100">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#januari2021" title="Januari">Januari</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#februari2021" title="Februari">Februari</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#maret2021" title="Maret">Maret</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#april2021" title="April">April</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#mei2021" title="Mei">Mei</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#juni2021" title="Juni">Juni</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#juli2021" title="Juli">Juli</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#agustus2021" title="Agustus">Agustus</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#september2021" title="September">September</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#oktober2021" title="Oktober">Oktober</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#november2021" title="November">November</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#desember2021" title="Desember">Desember</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 2022 -->
                    <div class="tab-pane" id="tahun2022">
                        <div class="row">
                            <!-- Bulan -->
                            <div class="col-lg-auto">
                                <div class="row" data-aos="fade-up" data-aos-delay="100">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#januari2022" title="Januari">Januari</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#februari2022" title="Februari">Februari</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#maret2022" title="Maret" disabled="disabled" style="color: grey;">Maret</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#april2022" title="April" disabled="disabled" style="color: grey;">April</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#mei2022" title="Mei" disabled="disabled" style="color: grey;">Mei</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#juni2022" title="Juni" disabled="disabled" style="color: grey;">Juni</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#juli2022" title="Juli" disabled="disabled" style="color: grey;">Juli</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#agustus2022" title="Agustus" disabled="disabled" style="color: grey;">Agustus</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#september2022" title="September" disabled="disabled" style="color: grey;">September</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#oktober2022" title="Oktober" disabled="disabled" style="color: grey;">Oktober</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#november2022" title="November" disabled="disabled" style="color: grey;">November</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#desember2022" title="Desember" disabled="disabled" style="color: grey;">Desember</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tanggal Tahun 2020-2022 -->
                <hr data-aos="fade-up" data-aos-delay="400">
                <div class="tab-content" data-aos="fade-up" data-aos-delay="500">

                    <!-- Tahun 2020 -->
                    <!-- Januari 2020 -->
                    <div class="tab-pane active show" id="januari2020">
                        <div class="row">
                            <div class="col-lg-auto" data-aos-delay="500">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#januari2020-05">05 Januari 2020</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#januari2020-19">19 Januari 2020</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#januari2020-26">26 Januari 2020</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Februari 2020 -->
                    <div class="tab-pane" id="februari2020">
                        <div class="row">
                            <div class="col-lg-auto" data-aos-delay="300">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#februari2020-02">02 Februari 2020</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#februari2020-09">09 Februari 2020</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#februari2020-16">16 Februari 2020</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#februari2020-23">23 Februari 2020</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Maret 2020 -->
                    <div class="tab-pane" id="maret2020">
                        <div class="row">
                            <div class="col-lg-auto" data-aos-delay="300">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#maret2020-01">01 Maret 2020</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#maret2020-08">08 Maret 2020</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- April 2020 -->
                    <div class="tab-pane" id="april2020">
                        <div class="row">
                            <div class="col-lg-auto" data-aos-delay="300">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#april2020-12">12 April 2020</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#april2020-26">26 April 2020</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Mei 2020 -->
                    <div class="tab-pane" id="mei2020">
                        <div class="row">
                            <div class="col-lg-auto" data-aos-delay="300">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#mei2020-10">10 Mei 2020</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#mei2020-17">17 Mei 2020</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#mei2020-31">31 Mei 2020</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Juni 2020 -->
                    <div class="tab-pane" id="juni2020">
                        <div class="row">
                            <div class="col-lg-auto" data-aos-delay="300">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#juni2020-07">07 Juni 2020</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#juni2020-14">14 Juni 2020</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#juni2020-21">21 Juni 2020</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Juli 2020 -->
                    <div class="tab-pane" id="juli2020">
                        <div class="row">
                            <div class="col-lg-auto" data-aos-delay="300">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#juli2020-05">05 Juli 2020</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#juli2020-12">12 Juli 2020</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#juli2020-19">19 Juli 2020</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#juli2020-26">26 Juli 2020</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Agustus 2020 -->
                    <div class="tab-pane" id="agustus2020">
                        <div class="row">
                            <div class="col-lg-auto" data-aos-delay="300">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#agustus2020-02">02 Agustus 2020</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#agustus2020-09">09 Agustus 2020</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#agustus2020-16">16 Agustus 2020</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#agustus2020-23">23 Agustus 2020</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#agustus2020-30">30 Agustus 2020</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- September 2020 -->
                    <div class="tab-pane" id="september2020">
                        <div class="row">
                            <div class="col-lg-auto" data-aos-delay="300">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#september2020-06">06 September 2020</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#september2020-13">13 September 2020</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#september2020-20">20 September 2020</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#september2020-27">27 September 2020</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Oktober 2020 -->
                    <div class="tab-pane" id="oktober2020">
                        <div class="row">
                            <div class="col-lg-auto" data-aos-delay="300">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#oktober2020-04">04 Oktober 2020</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#oktober2020-11">11 Oktober 2020</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#oktober2020-18">18 Oktober 2020</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#oktober2020-25">25 Oktober 2020</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- November 2020 -->
                    <div class="tab-pane" id="november2020">
                        <div class="row">
                            <div class="col-lg-auto" data-aos-delay="300">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#november2020-29">29 November 2020</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Desember 2020 -->
                    <div class="tab-pane" id="desember2020">
                        <div class="row">
                            <div class="col-lg-auto" data-aos-delay="300">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#desember2020-06">06 Desember 2020</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#desember2020-13">13 Desember 2020</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#desember2020-20">20 Desember 2020</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#desember2020-27">27 Desember 2020</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Tahun 2021 -->
                    <!-- Januari 2021 -->
                    <div class="tab-pane" id="januari2021">
                        <div class="row">
                            <div class="col-lg-auto" data-aos-delay="500">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#januari2021-17">17 Januari 2021</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#januari2021-24">24 Januari 2021</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#januari2021-31">31 Januari 2021</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Februari 2021 -->
                    <div class="tab-pane" id="februari2021">
                        <div class="row">
                            <div class="col-lg-auto" data-aos-delay="300">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#februari2021-07">07 Februari 2021</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#februari2021-14">14 Februari 2021</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#februari2021-21">21 Februari 2021</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Maret 2021 -->
                    <div class="tab-pane" id="maret2021">
                        <div class="row">
                            <div class="col-lg-auto" data-aos-delay="300">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#maret2021-07">07 Maret 2021</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#maret2021-14">14 Maret 2021</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#maret2021-21">21 Maret 2021</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#maret2021-28">28 Maret 2021</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- April 2021 -->
                    <div class="tab-pane" id="april2021">
                        <div class="row">
                            <div class="col-lg-auto" data-aos-delay="300">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#april2021-04">04 April 2021</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#april2021-11">11 April 2021</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#april2021-25">25 April 2021</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Mei 2021 -->
                    <div class="tab-pane" id="mei2021">
                        <div class="row">
                            <div class="col-lg-auto" data-aos-delay="300">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#mei2021-02">02 Mei 2021</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#mei2021-09">09 Mei 2021</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#mei2021-16">16 Mei 2021</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#mei2021-23">23 Mei 2021</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#mei2021-30">30 Mei 2021</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Juni 2021 -->
                    <div class="tab-pane" id="juni2021">
                        <div class="row">
                            <div class="col-lg-auto" data-aos-delay="300">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#juni2021-06">06 Juni 2021</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#juni2021-13">13 Juni 2021</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Juli 2021 -->
                    <div class="tab-pane" id="juli2021">
                        <div class="row">
                            <div class="col-lg-auto" data-aos-delay="300">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#juli2021-11">11 Juli 2021</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#juli2021-18">18 Juli 2021</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#juli2021-25">25 Juli 2021</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Agustus 2021 -->
                    <div class="tab-pane" id="agustus2021">
                        <div class="row">
                            <div class="col-lg-auto" data-aos-delay="300">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#agustus2021-01">01 Agustus 2021</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#agustus2021-08">08 Agustus 2021</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#agustus2021-15">15 Agustus 2021</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#agustus2021-22">22 Agustus 2021</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#agustus2021-29">29 Agustus 2021</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- September 2021 -->
                    <div class="tab-pane" id="september2021">
                        <div class="row">
                            <div class="col-lg-auto" data-aos-delay="300">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#september2021-05">05 September 2021</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#september2021-12">12 September 2021</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#september2021-19">19 September 2021</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#september2021-26">26 September 2021</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Oktober 2021 -->
                    <div class="tab-pane" id="oktober2021">
                        <div class="row">
                            <div class="col-lg-auto" data-aos-delay="300">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#oktober2021-03">03 Oktober 2021</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#oktober2021-10">10 Oktober 2021</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#oktober2021-17">17 Oktober 2021</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#oktober2021-24">24 Oktober 2021</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#oktober2021-31">31 Oktober 2021</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- November 2021 -->
                    <div class="tab-pane" id="november2021">
                        <div class="row">
                            <div class="col-lg-auto" data-aos-delay="300">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#november2021-07">07 November 2021</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#november2021-14">14 November 2021</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#november2021-21">21 November 2021</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#november2021-28">28 November 2021</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Desember 2021 -->
                    <div class="tab-pane" id="desember2021">
                        <div class="row">
                            <div class="col-lg-auto" data-aos-delay="300">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#desember2021-05">05 Desember 2021</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#desember2021-12">12 Desember 2021</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#desember2021-19">19 Desember 2021</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#desember2021-26">26 Desember 2021</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Tahun 2022 -->
                    <!-- Januari 2022 -->
                    <div class="tab-pane" id="januari2022">
                        <div class="row">
                            <div class="col-lg-auto" data-aos-delay="500">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#januari2022-02">02 Januari 2022</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#januari2022-09">09 Januari 2022</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#januari2022-16">16 Januari 2022</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#januari2022-30">30 Januari 2022</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Februari 2022 -->
                    <div class="tab-pane" id="februari2022">
                        <div class="row">
                            <div class="col-lg-auto" data-aos-delay="300">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#februari2022-06">06 Februari 2022</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#februari2022-13">13 Februari 2022</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#februari2022-20">20 Februari 2022</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#februari2022-27">27 Februari 2022</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Maret 2022 -->
                    <div class="tab-pane" id="maret2022">
                        <div class="row">
                            <div class="col-lg-auto" data-aos-delay="300">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#maret2022-09">09 Maret 2022</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#maret2022-13">13 Maret 2022</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#maret2022-20">20 Maret 2022</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#maret2022-27">27 Maret 2022</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- April 2022 -->
                    <div class="tab-pane" id="april2022">
                        <div class="row">
                            <div class="col-lg-auto" data-aos-delay="300">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#april2022-03">03 April 2022</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#april2022-10">10 April 2022</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#april2022-17">17 April 2022</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#april2022-24">24 April 2022</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Mei 2022 -->
                    <div class="tab-pane" id="mei2022">
                        <div class="row">
                            <div class="col-lg-auto" data-aos-delay="300">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#mei2022-01">01 Mei 2022</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#mei2022-08">08 Mei 2022</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#mei2022-15">15 Mei 2022</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#mei2022-22">22 Mei 2022</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#mei2022-29">29 Mei 2022</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Juni 2022 -->
                    <div class="tab-pane" id="juni2022">
                        <div class="row">
                            <div class="col-lg-auto" data-aos-delay="300">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#juni2022-05">05 Juni 2022</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#juni2022-12">12 Juni 2022</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#juni2022-19">19 Juni 2022</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#juni2022-26">26 Juni 2022</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Juli 2022 -->
                    <div class="tab-pane" id="juli2022">
                        <div class="row">
                            <div class="col-lg-auto" data-aos-delay="300">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#juli2022-03">03 Juli 2022</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#juli2022-10">10 Juli 2022</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#juli2022-17">17 Juli 2022</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#juli2022-24">24 Juli 2022</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#juli2022-31">31 Juli 2022</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Agustus 2022 -->
                    <div class="tab-pane" id="agustus2022">
                        <div class="row">
                            <div class="col-lg-auto" data-aos-delay="300">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#agustus2022-07">07 Agustus 2022</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#agustus2022-14">14 Agustus 2022</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#agustus2022-21">21 Agustus 2022</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#agustus2022-28">28 Agustus 2022</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- September 2022 -->
                    <div class="tab-pane" id="september2022">
                        <div class="row">
                            <div class="col-lg-auto" data-aos-delay="300">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#september2022-04">04 September 2022</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#september202211-">11 September 2022</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#september2022-18">18 September 2022</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#september2022-25">25 September 2022</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Oktober 2022 -->
                    <div class="tab-pane" id="oktober2022">
                        <div class="row">
                            <div class="col-lg-auto" data-aos-delay="300">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#oktober2022-02">02 Oktober 2022</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#oktober2022-09">09 Oktober 2022</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#oktober2022-16">16 Oktober 2022</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#oktober2022-23">23 Oktober 2022</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#oktober2022-30">30 Oktober 2022</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- November 2022 -->
                    <div class="tab-pane" id="november2022">
                        <div class="row">
                            <div class="col-lg-auto" data-aos-delay="300">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#november2022-06">06 November 2022</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#november2022-13">13 November 2022</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#november2022-20">20 November 2022</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#november2022-27">27 November 2022</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Desember 2022 -->
                    <div class="tab-pane" id="desember2022">
                        <div class="row">
                            <div class="col-lg-auto" data-aos-delay="300">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#desember2022-04">04 Desember 2022</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#desember2022-11">11 Desember 2022</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#desember2022-18">18 Desember 2022</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#desember2022-25">25 Desember 2022</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Konten Jihad Pagi -->
                <hr data-aos="fade-up" data-aos-delay="600">
                <div class="tab-content" data-aos="fade-up" data-aos-delay="500">

                    <!-- 05 Januari 2020 -->
                    <?php include("tahun2020.php") ?>
                    <?php include("tahun2021.php") ?>
                    <?php include("tahun2022.php") ?>
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

    <!-- Video Play JS -->
    <script>
        const API_URL = "https://www.youtube.com/embed/oWh_mHuLWqI"
        const iframe = $('iframe#test-iframe')[0]
        let btn = $('a.test-video')
        btn.on('click', (e) => {
            let data = e.target.attributes.getNamedItem('data-start')
            let end = parseInt(data.value) + 3
            iframe.setAttribute('src', `${API_URL}?start=${data.value}&end=${end}&autoplay=1`)
        })
    </script>

</body>

</html>