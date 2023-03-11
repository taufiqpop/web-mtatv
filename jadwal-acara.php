<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MTATV || Jadwal Acara</title>
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

	<!-- Internal CSS -->
	<style>
		mark {
			background: yellow;
		}
	</style>

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
					<li><a class="nav-link scrollto active" href="jadwal-acara.php" title="Jadwal Acara">Jadwal Acara</a></li>
					<li><a class="nav-link scrollto" href="crew-mtatv.php" title="Crew">Crew</a></li>
					<li><a class="nav-link scrollto" href="index.php#contact" title="Contact">Contact</a></li>
				</ul>
				<i class="bi bi-list mobile-nav-toggle"></i>
			</nav>

			<a href="https://www.useetv.com/livetv/mtatv" target="_blank" class="book-a-table-btn scrollto d-none d-lg-flex" title="Tonton Acara">Tonton Acara</a>
		</div>
	</header>

	<!-- Blank -->
	<div class="container">
		<br><br><br>
	</div>

	<!-- Jadwal Acara -->
	<section class="specials">
		<div class="container" data-aos="fade-up">
			<div class="section-title">
				<h2>Jadwal</h2>
				<p>Jadwal Acara</p>
			</div>
			<div class="row" data-aos="fade-up" data-aos-delay="100">
				<ul class="nav nav-tabs">
					<li class="nav-item">
						<a class="nav-link active" data-bs-toggle="tab" href="#senin" title="Senin">Senin</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="tab" href="#selasa" title="Selasa">Selasa</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="tab" href="#rabu" title="Rabu">Rabu</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="tab" href="#kamis" title="Kamis">Kamis</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="tab" href="#jumat" title="Jumat">Jumat</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="tab" href="#sabtu" title="Sabtu">Sabtu</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="tab" href="#ahad" title="Ahad">Ahad</a>
					</li>
				</ul>
			</div>
			<hr data-aos="fade-up" data-aos-delay="150">
			<div class="tab-content" data-aos="fade-up" data-aos-delay="200">
				<!-- Senin -->
				<div class="tab-pane active show" id="senin">
					<div class="row">
						<!-- Grid 1 -->
						<div class="col-lg-auto">
							<table class="table table-bordered table-dark">
								<thead style="text-align: center;">
									<tr>
										<th>Acara</th>
										<th>Waktu</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Murotal</td>
										<td style="text-align: center;">00:00 - 02:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Kamus On Air</td>
										<td style="text-align: center;">02:00 - 03:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Tausyiah Pagi</td>
										<td style="text-align: center;">03:00 - 04:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Bunga Rampai</td>
										<td style="text-align: center;">04:00 - 04:30</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Adzan Subuh dan Murotal</td>
										<td style="text-align: center;">04:30 - 05:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Lembar Ilmu</td>
										<td style="text-align: center;">05:00 - 05:05</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Fajar Hidayah</td>
										<td style="text-align: center;">05:05 - 06:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td><mark>Rekaman JIHAD PAGI</mark></td>
										<td style="text-align: center;"><mark>06:00 - 08:00</mark></td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Aku bisa dan Khazanah Islam</td>
										<td style="text-align: center;">08:00 - 08:55</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Mutiara Doa</td>
										<td style="text-align: center;">08:55 - 09:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Wirausaha</td>
										<td style="text-align: center;">09:00 - 10:00</td>
									</tr>
								</tbody>
							</table>
						</div>

						<!-- Grid 2 -->
						<div class="col-lg-auto">
							<table class="table table-bordered table-dark">
								<thead style="text-align: center;">
									<tr>
										<th>Acara</th>
										<th>Waktu</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Saatnya Wanita Berbicara - SWB</td>
										<td style="text-align: center;">10:00 - 11:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Lembar Ilmu</td>
										<td style="text-align: center;">11:00 - 11:05</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>KAJIAN JELAS - Kajian Jelang Sholat</td>
										<td style="text-align: center;">11:05 - 11:30</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Adzan Dluhur dan Murottal</td>
										<td style="text-align: center;">11:30 - 11:55</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Mutiara Doa</td>
										<td style="text-align: center;">11:55 - 12:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Rukti Jenazah</td>
										<td style="text-align: center;">12:00 - 12:30</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Bunga Rampai</td>
										<td style="text-align: center;">12:30 - 13:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Mitra Tani</td>
										<td style="text-align: center;">13:00 - 14:00</td>
									</tr>
								</tbody>
								<!-- <tbody>
                                        <tr>
                                            <td>Ingon - Ingon</td>
                                            <td style="text-align: center;">13:00 - 14:00</td>
                                        </tr>
                                    </tbody> -->
								<tbody>
									<tr>
										<td><mark>Rekaman JIHAD PAGI 2</mark></td>
										<td style="text-align: center;"><mark>14:00 - 15:00</mark></td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Dunia Pendidikan</td>
										<td style="text-align: center;">15:00 - 16:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Kilas Info Terpilih - KIT</td>
										<td style="text-align: center;">16:00 - 16:15</td>
									</tr>
								</tbody>
							</table>
						</div>

						<!-- Grid 3 -->
						<div class="col-lg-auto">
							<table class="table table-bordered table-dark">
								<thead style="text-align: center;">
									<tr>
										<th>Acara</th>
										<th>Waktu</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Risalah Tafsir</td>
										<td style="text-align: center;">16:15 - 16:55</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Mutiara Doa</td>
										<td style="text-align: center;">16:55 - 17:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Lembar Ilmu</td>
										<td style="text-align: center;">17:00 - 17:05</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>KAJIAN JELAS - Kajian Jelang Sholat</td>
										<td style="text-align: center;">17:05 - 17:30</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Adzan Maghrib dan Murottal</td>
										<td style="text-align: center;">17:30 - 18:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Kamus Islam</td>
										<td style="text-align: center;">18:00 - 18:05</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Tahsin</td>
										<td style="text-align: center;">18:05 - 19:55</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Mutiara Doa</td>
										<td style="text-align: center;">19:55 - 20:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Majlisku</td>
										<td style="text-align: center;">20:00 - 20:30</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Ustadz On Air</td>
										<td style="text-align: center;">20:30 - 22:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Hikmah</td>
										<td style="text-align: center;">22:00 - 00:00</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>

				<!-- Selasa -->
				<div class="tab-pane" id="selasa">
					<div class="row">
						<!-- Grid 1 -->
						<div class="col-lg-auto">
							<table class="table table-bordered table-dark">
								<thead style="text-align: center;">
									<tr>
										<th>Acara</th>
										<th>Waktu</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Murotal</td>
										<td style="text-align: center;">00:00 - 02:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Kamus On Air</td>
										<td style="text-align: center;">02:00 - 03:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Tausyiah Pagi</td>
										<td style="text-align: center;">03:00 - 04:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Bunga Rampai</td>
										<td style="text-align: center;">04:00 - 04:30</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Adzan Subuh dan Murotal</td>
										<td style="text-align: center;">04:30 - 05:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Lembar Ilmu</td>
										<td style="text-align: center;">05:00 - 05:05</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Fajar Hidayah</td>
										<td style="text-align: center;">05:05 - 06:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td><mark>Rekaman JIHAD PAGI 1</mark></td>
										<td style="text-align: center;"><mark>06:00 - 08:00</mark></td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Aku bisa dan Khazanah Islam</td>
										<td style="text-align: center;">08:00 - 08:55</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Kamus Islam</td>
										<td style="text-align: center;">08:55 - 09:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Kota Kita</td>
										<td style="text-align: center;">09:00 - 10:00</td>
									</tr>
								</tbody>
							</table>
						</div>

						<!-- Grid 2 -->
						<div class="col-lg-auto">
							<table class="table table-bordered table-dark">
								<thead style="text-align: center;">
									<tr>
										<th>Acara</th>
										<th>Waktu</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Saatnya Wanita Berbicara - SWB</td>
										<td style="text-align: center;">10:00 - 11:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Lembar Ilmu</td>
										<td style="text-align: center;">11:00 - 11:05</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>KAJIAN JELAS - Kajian Jelang Sholat</td>
										<td style="text-align: center;">11:05 - 11:30</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Adzan Dluhur dan Murottal</td>
										<td style="text-align: center;">11:30 - 11:55</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Mutiara Doa</td>
										<td style="text-align: center;">11:55 - 12:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Rukti Jenazah</td>
										<td style="text-align: center;">12:00 - 12:30</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Bunga Rampai</td>
										<td style="text-align: center;">12:30 - 13:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Hikmah</td>
										<td style="text-align: center;">13:00 - 14:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td><mark>Rekaman JIHAD PAGI 2</mark></td>
										<td style="text-align: center;"><mark>14:00 - 15:00</mark></td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Prestasi</td>
										<td style="text-align: center;">15:00 - 16:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Kilas Info Terpilih - KIT</td>
										<td style="text-align: center;">16:00 - 16:15</td>
									</tr>
								</tbody>
							</table>
						</div>

						<!-- Grid 3 -->
						<div class="col-lg-auto">
							<table class="table table-bordered table-dark">
								<thead style="text-align: center;">
									<tr>
										<th>Acara</th>
										<th>Waktu</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Risalah Hadits</td>
										<td style="text-align: center;">16:15 - 16:55</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Mutiara Doa</td>
										<td style="text-align: center;">16:55 - 17:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Lembar Ilmu</td>
										<td style="text-align: center;">17:00 - 17:05</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>KAJIAN JELAS - Kajian Jelang Sholat</td>
										<td style="text-align: center;">17:05 - 17:30</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Adzan Maghrib dan Murottal</td>
										<td style="text-align: center;">17:30 - 18:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Kamus Islam</td>
										<td style="text-align: center;">18:00 - 18:05</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Mari Berbahasa Arab</td>
										<td style="text-align: center;">18:05 - 19:55</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Mutiara Doa</td>
										<td style="text-align: center;">19:55 - 20:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Kilas Info Terpilih - KIT</td>
										<td style="text-align: center;">20:00 - 20:15</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td><mark>Rekaman JIHAD PAGI 3</mark></td>
										<td style="text-align: center;"><mark>20:15 - 23:00</mark></td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Tabligh</td>
										<td style="text-align: center;">23:00 - 00:00</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>

				<!-- Rabu -->
				<div class="tab-pane" id="rabu">
					<div class="row">
						<!-- Grid 1 -->
						<div class="col-lg-auto">
							<table class="table table-bordered table-dark">
								<thead style="text-align: center;">
									<tr>
										<th>Acara</th>
										<th>Waktu</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Murotal</td>
										<td style="text-align: center;">00:00 - 02:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Kamus On Air</td>
										<td style="text-align: center;">02:00 - 03:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Tausyiah Pagi</td>
										<td style="text-align: center;">03:00 - 04:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Bunga Rampai</td>
										<td style="text-align: center;">04:00 - 04:30</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Adzan Subuh dan Murotal</td>
										<td style="text-align: center;">04:30 - 05:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Lembar Ilmu</td>
										<td style="text-align: center;">05:00 - 05:05</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Fajar Hidayah</td>
										<td style="text-align: center;">05:05 - 06:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td><mark>Rekaman JIHAD PAGI 1</mark></td>
										<td style="text-align: center;"><mark>06:00 - 08:00</mark></td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Aku bisa dan Khazanah Islam</td>
										<td style="text-align: center;">08:00 - 08:55</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Mutiara Doa</td>
										<td style="text-align: center;">08:55 - 09:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Bunga Rampai</td>
										<td style="text-align: center;">09:00 - 10:00</td>
									</tr>
								</tbody>
							</table>
						</div>

						<!-- Grid 2 -->
						<div class="col-lg-auto">
							<table class="table table-bordered table-dark">
								<thead style="text-align: center;">
									<tr>
										<th>Acara</th>
										<th>Waktu</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Saatnya Wanita Berbicara - SWB</td>
										<td style="text-align: center;">10:00 - 11:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Lembar Ilmu</td>
										<td style="text-align: center;">11:00 - 11:05</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>KAJIAN JELAS - Kajian Jelang Sholat</td>
										<td style="text-align: center;">11:05 - 11:30</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Adzan Dluhur dan Murottal</td>
										<td style="text-align: center;">11:30 - 11:55</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Mutiara Doa</td>
										<td style="text-align: center;">11:55 - 12:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Rukti Jenazah</td>
										<td style="text-align: center;">12:00 - 12:30</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Bunga Rampai</td>
										<td style="text-align: center;">12:30 - 13:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>BIM - Berbagi Ilmu dan Manfaat</td>
										<td style="text-align: center;">13:00 - 14:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td><mark>Rekaman JIHAD PAGI 2</mark></td>
										<td style="text-align: center;"><mark>14:00 - 15:00</mark></td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>SRU</td>
										<td style="text-align: center;">15:00 - 16:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Kilas Info Terpilih - KIT</td>
										<td style="text-align: center;">16:00 - 16:15</td>
									</tr>
								</tbody>
							</table>
						</div>

						<!-- Grid 3 -->
						<div class="col-lg-auto">
							<table class="table table-bordered table-dark">
								<thead style="text-align: center;">
									<tr>
										<th>Acara</th>
										<th>Waktu</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Risalah Mudzakarah</td>
										<td style="text-align: center;">16:15 - 16:55</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Mutiara Doa</td>
										<td style="text-align: center;">16:55 - 17:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Lembar Ilmu</td>
										<td style="text-align: center;">17:00 - 17:05</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>KAJIAN JELAS - Kajian Jelang Sholat</td>
										<td style="text-align: center;">17:05 - 17:30</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Adzan Maghrib dan Murottal</td>
										<td style="text-align: center;">17:30 - 18:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Kamus Islam</td>
										<td style="text-align: center;">18:00 - 18:05</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Tahsin</td>
										<td style="text-align: center;">18:05 - 19:55</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Mutiara Doa</td>
										<td style="text-align: center;">19:55 - 20:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Kilas Info Terpilih - KIT</td>
										<td style="text-align: center;">20:00 - 20:15</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td><mark>Rekaman JIHAD PAGI 3</mark></td>
										<td style="text-align: center;"><mark>20:15 - 23:00</mark></td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Tabligh</td>
										<td style="text-align: center;">23:00 - 00:00</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>

				<!-- Kamis -->
				<div class="tab-pane" id="kamis">
					<div class="row">
						<!-- Grid 1 -->
						<div class="col-lg-auto">
							<table class="table table-bordered table-dark">
								<thead style="text-align: center;">
									<tr>
										<th>Acara</th>
										<th>Waktu</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Murotal</td>
										<td style="text-align: center;">00:00 - 02:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Kamus On Air</td>
										<td style="text-align: center;">02:00 - 03:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Tausyiah Pagi</td>
										<td style="text-align: center;">03:00 - 04:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Bunga Rampai</td>
										<td style="text-align: center;">04:00 - 04:30</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Adzan Subuh dan Murotal</td>
										<td style="text-align: center;">04:30 - 05:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Lembar Ilmu</td>
										<td style="text-align: center;">05:00 - 05:05</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Fajar Hidayah</td>
										<td style="text-align: center;">05:05 - 06:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td><mark>Rekaman JIHAD PAGI 1</mark></td>
										<td style="text-align: center;"><mark>06:00 - 08:00</mark></td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Aku bisa dan Khazanah Islam</td>
										<td style="text-align: center;">08:00 - 08:55</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Mutiara Doa</td>
										<td style="text-align: center;">08:55 - 09:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>IT - Information Technology</td>
										<td style="text-align: center;">09:00 - 10:00</td>
									</tr>
								</tbody>
							</table>
						</div>

						<!-- Grid 2 -->
						<div class="col-lg-auto">
							<table class="table table-bordered table-dark">
								<thead style="text-align: center;">
									<tr>
										<th>Acara</th>
										<th>Waktu</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Saatnya Wanita Berbicara - SWB</td>
										<td style="text-align: center;">10:00 - 11:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Lembar Ilmu</td>
										<td style="text-align: center;">11:00 - 11:05</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>KAJIAN JELAS - Kajian Jelang Sholat</td>
										<td style="text-align: center;">11:05 - 11:30</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Adzan Dluhur dan Murottal</td>
										<td style="text-align: center;">11:30 - 11:55</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Mutiara Doa</td>
										<td style="text-align: center;">11:55 - 12:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Rukti Jenazah</td>
										<td style="text-align: center;">12:00 - 12:30</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Rihlah</td>
										<td style="text-align: center;">12:30 - 13:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Bunga Rampai Silaturahim</td>
										<td style="text-align: center;">13:00 - 14:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td><mark>Rekaman JIHAD PAGI 2</mark></td>
										<td style="text-align: center;"><mark>14:00 - 15:00</mark></td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Kilas MTA</td>
										<td style="text-align: center;">15:00 - 16:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Meniti Jalan Dakwah</td>
										<td style="text-align: center;">16:00 - 16:55</td>
									</tr>
								</tbody>
							</table>
						</div>

						<!-- Grid 3 -->
						<div class="col-lg-auto">
							<table class="table table-bordered table-dark">
								<thead style="text-align: center;">
									<tr>
										<th>Acara</th>
										<th>Waktu</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Mutiara Doa</td>
										<td style="text-align: center;">16:55 - 17:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Lembar Ilmu</td>
										<td style="text-align: center;">17:00 - 17:05</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>KAJIAN JELAS - Kajian Jelang Sholat</td>
										<td style="text-align: center;">17:05 - 17:30</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Adzan Maghrib dan Murottal</td>
										<td style="text-align: center;">17:30 - 18:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Kamus Islam</td>
										<td style="text-align: center;">18:00 - 18:05</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Tahsin</td>
										<td style="text-align: center;">18:05 - 19:55</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Mutiara Doa</td>
										<td style="text-align: center;">19:55 - 20:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td><mark>Rekaman JIHAD PAGI 3</mark></td>
										<td style="text-align: center;"><mark>20:00 - 23:00</mark></td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Tabligh</td>
										<td style="text-align: center;">23:00 - 00:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td></td>
										<td style="text-align: center; color: #212529;">Blank</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td></td>
										<td style="text-align: center; color: #212529;">Blank</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>

				<!-- Jumat -->
				<div class="tab-pane" id="jumat">
					<div class="row">
						<!-- Grid 1 -->
						<div class="col-lg-auto">
							<table class="table table-bordered table-dark">
								<thead style="text-align: center;">
									<tr>
										<th>Acara</th>
										<th>Waktu</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Murotal</td>
										<td style="text-align: center;">00:00 - 02:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Kamus On Air</td>
										<td style="text-align: center;">02:00 - 03:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Tausyiah Pagi</td>
										<td style="text-align: center;">03:00 - 04:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Bunga Rampai</td>
										<td style="text-align: center;">04:00 - 04:30</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Adzan Subuh dan Murotal</td>
										<td style="text-align: center;">04:30 - 05:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Lembar Ilmu</td>
										<td style="text-align: center;">05:00 - 05:05</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Fajar Hidayah</td>
										<td style="text-align: center;">05:05 - 06:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td><mark>Rekaman JIHAD PAGI 1</mark></td>
										<td style="text-align: center;"><mark>06:00 - 08:00</mark></td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Aku bisa dan Khazanah Islam</td>
										<td style="text-align: center;">08:00 - 08:55</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Mutiara Doa</td>
										<td style="text-align: center;">08:55 - 09:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Tempo Doeloe</td>
										<td style="text-align: center;">09:00 - 10:00</td>
									</tr>
								</tbody>
							</table>
						</div>

						<!-- Grid 2 -->
						<div class="col-lg-auto">
							<table class="table table-bordered table-dark">
								<thead style="text-align: center;">
									<tr>
										<th>Acara</th>
										<th>Waktu</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Saatnya Wisata Boga - SWB</td>
										<td style="text-align: center;">10:00 - 11:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Lembar Ilmu</td>
										<td style="text-align: center;">11:00 - 11:05</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>KAJIAN JELAS - Kajian Jelang Sholat</td>
										<td style="text-align: center;">11:05 - 11:30</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Adzan Dluhur dan Murottal</td>
										<td style="text-align: center;">11:30 - 11:55</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Mutiara Doa</td>
										<td style="text-align: center;">11:55 - 12:30</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Majlisku</td>
										<td style="text-align: center;">12:30 - 13:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Ruang Psikologi</td>
										<td style="text-align: center;">13:00 - 14:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td><mark>Rekaman JIHAD PAGI 2</mark></td>
										<td style="text-align: center;"><mark>14:00 - 15:00</mark></td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Anugerah</td>
										<td style="text-align: center;">15:00 - 16:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Kilas Info Terpilih - KIT</td>
										<td style="text-align: center;">16:00 - 16:15</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Si Sopan - Sobat Pandai</td>
										<td style="text-align: center;">16:15 - 16:30</td>
									</tr>
								</tbody>
							</table>
						</div>

						<!-- Grid 3 -->
						<div class="col-lg-auto">
							<table class="table table-bordered table-dark">
								<thead style="text-align: center;">
									<tr>
										<th>Acara</th>
										<th>Waktu</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Masjidku</td>
										<td style="text-align: center;">16:30 - 16:55</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Mutiara Doa</td>
										<td style="text-align: center;">16:55 - 17:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Lembar Ilmu</td>
										<td style="text-align: center;">17:00 - 17:05</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>KAJIAN JELAS - Kajian Jelang Sholat</td>
										<td style="text-align: center;">17:05 - 17:30</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Adzan Maghrib dan Murottal</td>
										<td style="text-align: center;">17:30 - 18:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Kamus Islam</td>
										<td style="text-align: center;">18:00 - 18:05</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Tahsin</td>
										<td style="text-align: center;">18:05 - 19:55</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Mutiara Doa</td>
										<td style="text-align: center;">19:55 - 20:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Kilas Info Terpilih - KIT</td>
										<td style="text-align: center;">20:00 - 20:15</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td><mark>Rekaman JIHAD PAGI 3</mark></td>
										<td style="text-align: center;"><mark>20:15 - 22:00</mark></td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Wedangan</td>
										<td style="text-align: center;">22:00 - 00:00</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>

				<!-- Sabtu -->
				<div class="tab-pane" id="sabtu">
					<div class="row">
						<!-- Grid 1 -->
						<div class="col-lg-auto">
							<table class="table table-bordered table-dark">
								<thead style="text-align: center;">
									<tr>
										<th>Acara</th>
										<th>Waktu</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Murotal</td>
										<td style="text-align: center;">00:00 - 02:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Kamus On Air</td>
										<td style="text-align: center;">02:00 - 03:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Tausyiah Pagi</td>
										<td style="text-align: center;">03:00 - 04:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Bunga Rampai</td>
										<td style="text-align: center;">04:00 - 04:30</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Adzan Subuh dan Murotal</td>
										<td style="text-align: center;">04:30 - 05:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Lembar Ilmu</td>
										<td style="text-align: center;">05:00 - 05:05</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Fajar Hidayah</td>
										<td style="text-align: center;">05:05 - 06:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td><mark>Rekaman JIHAD PAGI 1</mark></td>
										<td style="text-align: center;"><mark>06:00 - 09:00</mark></td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Aku bisa dan Khazanah Islam</td>
										<td style="text-align: center;">09:00 - 10:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Taman Indria</td>
										<td style="text-align: center;">10:00 - 11:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Lembar Ilmu</td>
										<td style="text-align: center;">11:00 - 11:05</td>
									</tr>
								</tbody>
							</table>
						</div>

						<!-- Grid 2 -->
						<div class="col-lg-auto">
							<table class="table table-bordered table-dark">
								<thead style="text-align: center;">
									<tr>
										<th>Acara</th>
										<th>Waktu</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Si Sopan - Sobat Pandai</td>
										<td style="text-align: center;">11:05 - 11:20</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Kilau Ananda</td>
										<td style="text-align: center;">11:20 - 11:30</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Adzan Dluhur dan Murottal</td>
										<td style="text-align: center;">11:30 - 11:55</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Mutiara Doa</td>
										<td style="text-align: center;">11:55 - 12:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Rukti Jenazah</td>
										<td style="text-align: center;">12:00 - 12:30</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Ghirah</td>
										<td style="text-align: center;">12:30 - 13:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Klinik Kita</td>
										<td style="text-align: center;">13:00 - 14:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td><mark>Rekaman JIHAD PAGI 2</mark></td>
										<td style="text-align: center;"><mark>14:00 - 15:00</mark></td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Gempita Nusa Teruna</td>
										<td style="text-align: center;">15:00 - 16:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Kilas Info Terpilih - KIT</td>
										<td style="text-align: center;">16:00 - 16:15</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Seputar Haji</td>
										<td style="text-align: center;">16:15 - 16:55</td>
									</tr>
								</tbody>
							</table>
						</div>

						<!-- Grid 3 -->
						<div class="col-lg-auto">
							<table class="table table-bordered table-dark">
								<thead style="text-align: center;">
									<tr>
										<th>Acara</th>
										<th>Waktu</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Mutiara Doa</td>
										<td style="text-align: center;">16:55 - 17:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Lembar Ilmu</td>
										<td style="text-align: center;">17:00 - 17:05</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>KAJIAN JELAS - Kajian Jelang Sholat</td>
										<td style="text-align: center;">17:05 - 17:30</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Adzan Maghrib dan Murottal</td>
										<td style="text-align: center;">17:30 - 18:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Kamus Islam</td>
										<td style="text-align: center;">18:00 - 18:05</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Tahsin</td>
										<td style="text-align: center;">18:05 - 19:55</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Mutiara Doa</td>
										<td style="text-align: center;">19:55 - 20:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Kilas Info Terpilih - KIT</td>
										<td style="text-align: center;">20:00 - 20:15</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td><mark>Rekaman JIHAD PAGI 3</mark></td>
										<td style="text-align: center;"><mark>20:15 - 23:00</mark></td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Tabligh</td>
										<td style="text-align: center;">23:00 - 00:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td></td>
										<td style="text-align: center; color: #212529;">Blank</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>

				<!-- Ahad -->
				<div class="tab-pane" id="ahad">
					<div class="row">
						<!-- Grid 1 -->
						<div class="col-lg-auto">
							<table class="table table-bordered table-dark">
								<thead style="text-align: center;">
									<tr>
										<th>Acara</th>
										<th>Waktu</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Murotal</td>
										<td style="text-align: center;">00:00 - 02:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Kamus On Air</td>
										<td style="text-align: center;">02:00 - 03:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Tausyiah Pagi</td>
										<td style="text-align: center;">03:00 - 04:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Bunga Rampai</td>
										<td style="text-align: center;">04:00 - 04:30</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Adzan Subuh dan Murotal</td>
										<td style="text-align: center;">04:30 - 05:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Lembar Ilmu</td>
										<td style="text-align: center;">05:00 - 05:05</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Fajar Hidayah</td>
										<td style="text-align: center;">05:05 - 06:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Shilaturahim Jihad Pagi</td>
										<td style="text-align: center;">06:00 - 08:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td><mark>LIVE Jihad Pagi</mark></td>
										<td style="text-align: center;"><mark>08:00 - 12:00</mark></td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Rukti Jenazah</td>
										<td style="text-align: center;">12:00 - 12:30</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Si Sopan - Sobat Pandai</td>
										<td style="text-align: center;">12:30 - 13:00</td>
									</tr>
								</tbody>
							</table>
						</div>

						<!-- Grid 2 -->
						<div class="col-lg-auto">
							<table class="table table-bordered table-dark">
								<thead style="text-align: center;">
									<tr>
										<th>Acara</th>
										<th>Waktu</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Gareng Mudheng</td>
										<td style="text-align: center;">13:00 - 14:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Aku bisa dan Khazanah Islam</td>
										<td style="text-align: center;">14:00 - 15:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Kilau Ananda</td>
										<td style="text-align: center;">15:00 - 16:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Taman Indria</td>
										<td style="text-align: center;">16:00 - 16:55</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Mutiara Doa</td>
										<td style="text-align: center;">16:55 - 17:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Lembar Ilmu</td>
										<td style="text-align: center;">17:00 - 17:05</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>KAJIAN JELAS - Kajian Jelang Sholat</td>
										<td style="text-align: center;">17:05 - 17:30</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Adzan Maghrib dan Murottal</td>
										<td style="text-align: center;">17:30 - 18:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Kamus Islam</td>
										<td style="text-align: center;">18:00 - 18:05</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Tahsin</td>
										<td style="text-align: center;">18:05 - 19:55</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Mutiara Doa</td>
										<td style="text-align: center;">19:55 - 20:00</td>
									</tr>
								</tbody>
							</table>
						</div>

						<!-- Grid 3 -->
						<div class="col-lg-auto">
							<table class="table table-bordered table-dark">
								<thead style="text-align: center;">
									<tr>
										<th>Acara</th>
										<th>Waktu</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Hidup Sehat Alami</td>
										<td style="text-align: center;">20:00 - 21:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Gurit Macapat</td>
										<td style="text-align: center;">21:00 - 22:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>Tabligh</td>
										<td style="text-align: center;">22:00 - 00:00</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td></td>
										<td style="text-align: center; color: #212529;">Blank</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td></td>
										<td style="text-align: center; color: #212529;">Blank</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td></td>
										<td style="text-align: center; color: #212529;">Blank</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td></td>
										<td style="text-align: center; color: #212529;">Blank</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td></td>
										<td style="text-align: center; color: #212529;">Blank</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td></td>
										<td style="text-align: center; color: #212529;">Blank</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td></td>
										<td style="text-align: center; color: #212529;">Blank</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td></td>
										<td style="text-align: center; color: #212529;">Blank</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


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
				Copyright &copy; 2022 <strong><span>MTATV</span></strong>
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