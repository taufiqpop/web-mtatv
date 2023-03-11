<?php
require("koneksi.php");
$id = $_GET["id"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MTATV || Video Jihad Pagi</title>
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
    <!-- Video -->
    <main id="main">
        <section>
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="section-title">
                        <div class="section-title">
                            <?php $ambil = $conn->query("SELECT * FROM pertanyaan JOIN jihad_pagi ON
                                        pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE id_pertanyaan=$id"); ?>
                            <?php $row = $ambil->fetch_assoc() ?>
                            <h2>Pertanyaan</h2>
                            <p><?php echo $row['tanya'] ?></p>
                        </div>
                        <div>
                            <a onclick="goBack()"><button type="button" class="btn btn-warning"><strong><i class="fa" style="font-size:100%">&#xf060;</i> Back</strong></button></a>
                            <hr>
                        </div>
                        <div>
                            <iframe width="100%" height="500vh" src="https://www.youtube.com/embed/<?php echo $row['link'] ?>?start=<?php echo ($row['waktu_mulai']) ?>&end=<?php echo ($row['waktu_selesai']) ?>?rel=0&autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
        </section>
    </main>

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

    <!-- Go Back JS -->
    <script>
        function goBack() {
            window.history.back();
        }
    </script>

</body>

</html>