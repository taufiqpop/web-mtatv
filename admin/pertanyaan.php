<?php
require("koneksi.php");
$ambil = $conn->query("SELECT * FROM jihad_pagi JOIN pertanyaan
ON jihad_pagi.id_jihad=pertanyaan.id_jihad
WHERE jihad_pagi.id_jihad='$_GET[id]'");
$detail = $ambil->fetch_assoc();
?>


<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template" />
    <meta name="description" content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework" />
    <meta name="robots" content="noindex,nofollow" />
    <title>video pertanyaan</title>
</head>

<body>

    <!-- Container fluid  -->
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data List Pertanyaan</h5>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Pertanyaan</th>
                                        <th>Link Video</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $nomor = 1; ?>
                                    <?php $ambil = $conn->query("SELECT * FROM pertanyaan JOIN jihad_pagi On
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE jihad_pagi.id_jihad='$_GET[id]'"); ?>
                                    <?php while ($row = $ambil->fetch_assoc()) { ?>
                                        <tr>
                                            <td><?php echo $nomor ?></td>
                                            <td><?php echo $row['tanya'] ?></a></td>
                                            <td>
                                                <iframe width="360" height="240" src="https://www.youtube.com/embed/<?php echo $row['link'] ?>?start=<?php echo ($row['waktu_mulai']) ?>&end=<?php echo ($row['waktu_selesai']) ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            </td>
                                        </tr>
                                        <?php $nomor++; ?>
                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No.</th>
                                        <th>Judul Video</th>
                                        <th>Link Video</th>
                                    </tr>
                                </tfoot>
                            </table>
                            <button type="button" class="btn btn-warning" onclick="location.href='index.php?halaman=JihadPagi';">Kembali</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Container fluid  -->
    <!-- End Page wrapper  -->
</body>

</html>