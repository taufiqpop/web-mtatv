<?php
require("koneksi.php");

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
    <!-- Bread crumb and right sidebar toggle -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Tables</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Video Jihad
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bread crumb and right sidebar toggle -->

    <!-- Container fluid  -->
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Data List Pertanyaan</h5>
                        <form class="d-flex mb-4" method="POST" action="index.php?halaman=tambahdetailbanyak">
                            <div class=" col-lg-3">
                                <input class="form-control me-2" type="number" name="jumlah" aria-label="Search" placeholder="Masukan angka">
                            </div>
                            <div class="col-lg-3">
                                <button class="btn btn-primary" type="submit" value="Proses"><i class="fas fa-plus-square"></i> Tambah data</button>
                            </div>
                        </form>
                        <!-- <a href="index.php?halaman=tambahdetail" class="btn btn-primary" style="margin-bottom: 20px;">
                            <i class="fas fa-plus-square"></i> Tambah data</a> -->
                        <!-- <a href="index.php?halaman=tambahdetailbanyak" class="btn btn-primary" style="margin-bottom: 20px;">
                            <i class="fas fa-plus-square"></i> Tambah Banyak Data</a> -->
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Pertanyaan</th>
                                        <th>Tanggal</th>
                                        <td>Time Start</td>
                                        <td>Time End</td>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $nomor = 1; ?>
                                    <?php $ambil = $conn->query("SELECT * FROM pertanyaan JOIN jihad_pagi On
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE id_pertanyaan"); ?>
                                    <?php while ($row = $ambil->fetch_assoc()) { ?>
                                        <tr>
                                            <td><?php echo $nomor ?></td>
                                            <td><?php echo $row['tanya'] ?></td>
                                            <td><?php echo $row['tanggal'] ?></td>
                                            <td>
                                                <?php
                                                $jam_mul = $row["waktu_mulai"];
                                                if ($jam_mul >= 3600) {
                                                    $det = $jam_mul / 3600;
                                                    echo floor($det);
                                                }
                                                if ($jam_mul < 3600) {
                                                    echo 0;
                                                } ?>
                                                .
                                                <?php
                                                $menit_mul = $row["waktu_mulai"];
                                                if ($menit_mul >= 3600) {
                                                    $men = $menit_mul / 60;
                                                    if ($men >= 59) {
                                                        $hasil = $men % 60;
                                                        echo floor($hasil);
                                                    }
                                                }
                                                if ($menit_mul < 3600) {
                                                    $men = $menit_mul / 60;
                                                    echo floor($men);
                                                }
                                                ?>
                                                .
                                                <?php
                                                $detik_mul = $row["waktu_mulai"];
                                                if ($detik_mul >= 3600) {
                                                    $det = $detik_mul % 60;
                                                    echo $det;
                                                }
                                                if ($detik_mul < 3600) {
                                                    $det = $detik_mul % 60;
                                                    echo $det;
                                                } ?>
                                            </td>
                                            <td>
                                                <?php
                                                $jam_sel = $row["waktu_selesai"];
                                                if ($jam_sel >= 3600) {
                                                    $jam = $jam_sel / 3600;
                                                    echo floor($jam);
                                                }
                                                if ($jam_sel < 3600) {
                                                    echo 0;
                                                } ?>
                                                .
                                                <?php
                                                $menit_sel = $row["waktu_selesai"];
                                                if ($menit_sel >= 3600) {
                                                    $men = $menit_sel / 60;
                                                    if ($men >= 59) {
                                                        $hasil = $men % 60;
                                                        echo floor($hasil);
                                                    }
                                                }
                                                if ($menit_sel < 3600) {
                                                    $men = $menit_sel / 60;
                                                    echo floor($men);
                                                }
                                                ?>
                                                .
                                                <?php
                                                $detik_sel = $row["waktu_selesai"];
                                                if ($detik_sel >= 3600) {
                                                    $det = $detik_sel % 60;
                                                    echo $det;
                                                }
                                                if ($detik_sel < 3600) {
                                                    $det = $detik_sel % 60;
                                                    echo $det;
                                                } ?>
                                            </td>
                                            <td>
                                                <a href="index.php?halaman=editdetail&id=<?php echo $row['id_pertanyaan']; ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                                <a href="index.php?halaman=hapusdetail&id=<?php echo $row['id_pertanyaan']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</a>
                                            </td>
                                        </tr>
                                        <?php $nomor++; ?>
                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No.</th>
                                        <th>Pertanyaan</th>
                                        <th>Tanggal</th>
                                        <td>Time Start</td>
                                        <td>Time End</td>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                            </table>
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