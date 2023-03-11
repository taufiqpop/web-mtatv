<?php
require("koneksi.php");

$ambil = $conn->query("SELECT * FROM pertanyaan WHERE id_pertanyaan='$_GET[id]'");
$row = $ambil->fetch_assoc();

?>

<?php
$datajihadpagi = array();
$ambil = $conn->query("SELECT * FROM jihad_pagi");
while ($tiap = $ambil->fetch_assoc()) {
    $datajihadpagi[] = $tiap;
}
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
    <title>edit pertanyaan</title>
</head>

<body>
    <!-- Preloader - style you can find in spinners.css -->

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
                                Edit Pertanyaan
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
                        <h5 class="card-title">Edit Pertanyaan</h5>
                        <form method="POST">
                            <div class="form-group">
                                <!-- <label>Pilih Video</label> -->
                                <label class="col-md-3 mt-3">Pilih Video</label>
                                <div class="col-md-9">
                                    <select name="id_jihad" class="select2 form-select shadow-none" style="width: 100%; height: 36px">
                                        <option value="">Pilih Video</option>
                                        <optgroup label="">
                                            <?php foreach ($datajihadpagi as $key => $value) : ?>
                                                <option value="<?php echo $value["id_jihad"] ?>" <?php if ($row["id_jihad"] == $value["id_jihad"]) {
                                                                                                        echo "selected";
                                                                                                    } ?>>
                                                    <?php echo $value["judul"] ?>
                                                </option>
                                            <?php endforeach ?>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class=" mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Pertanyaan</label>
                                    <textarea name="tanya" class="form-control" value="<?php echo $row['tanya']; ?>"><?php echo $row['tanya']; ?></textarea>
                                </div>
                                <div class="row mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Waktu Mulai</label>
                                    <div class="col-lg-3">
                                        <input type="number" name="jam_mul" class="form-control" value="<?php
                                                                                                        $jam_mul = $row["waktu_mulai"];
                                                                                                        if ($jam_mul >= 3600) {
                                                                                                            $det = $jam_mul / 3600;
                                                                                                            echo floor($det);
                                                                                                        }
                                                                                                        if ($jam_mul < 3600) {
                                                                                                            echo 0;
                                                                                                        } ?>">
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="number" name="menit_mul" class="form-control" value="<?php
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
                                                                                                            ?>">
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="number" name="detik_mul" class="form-control" value="<?php
                                                                                                            $detik_mul = $row["waktu_mulai"];
                                                                                                            if ($detik_mul >= 3600) {
                                                                                                                $det = $detik_mul % 60;
                                                                                                                echo $det;
                                                                                                            }
                                                                                                            if ($detik_mul < 3600) {
                                                                                                                $det = $detik_mul % 60;
                                                                                                                echo $det;
                                                                                                            } ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Waktu Selesai</label>
                                    <div class="col-lg-3">
                                        <input type="number" name="jam_sel" class="form-control" value="<?php
                                                                                                        $jam_sel = $row["waktu_mulai"];
                                                                                                        if ($jam_sel >= 3600) {
                                                                                                            $det = $jam_sel / 3600;
                                                                                                            echo floor($det);
                                                                                                        }
                                                                                                        if ($jam_sel < 3600) {
                                                                                                            echo 0;
                                                                                                        } ?>">
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="number" name="menit_sel" class="form-control" value="<?php
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
                                                                                                            ?>">
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="number" name="detik_sel" class="form-control" value="<?php
                                                                                                            $detik_sel = $row["waktu_selesai"];
                                                                                                            if ($detik_sel >= 3600) {
                                                                                                                $det = $detik_sel % 60;
                                                                                                                echo $det;
                                                                                                            }
                                                                                                            if ($detik_sel < 3600) {
                                                                                                                $det = $detik_sel % 60;
                                                                                                                echo $det;
                                                                                                            } ?>">
                                    </div>
                                </div>
                                <button type="submit" name="edit" class="btn btn-primary">Simpan</button>
                                <button type="button" class="btn btn-warning" onclick="location.href='index.php?halaman=detailpertanyaan';">Kembali</button>
                        </form>

                        <?php
                        // menyimpan data waktu _mulai
                        $jam_mul = $_POST["jam_mul"] * 3600;
                        $menit_mul = $_POST["menit_mul"] * 60;
                        $detik_mul = $_POST["detik_mul"];
                        $waktu_mulai = $jam_mul + $menit_mul + $detik_mul;

                        // menyimpan data waktu _selesai
                        $jam_sel = $_POST["jam_sel"] * 3600;
                        $menit_sel = $_POST["menit_sel"] * 60;
                        $detik_sel = $_POST["detik_sel"];
                        $waktu_selesai =  $jam_sel + $menit_sel + $detik_sel;

                        if (isset($_POST['edit'])) {
                            $conn->query("UPDATE pertanyaan SET tanya='$_POST[tanya]',
                                waktu_mulai=$waktu_mulai, waktu_selesai=$waktu_selesai, id_jihad='$_POST[id_jihad]'
                                WHERE id_pertanyaan='$_GET[id]'");
                            echo "<script>alert('Data pertanyaan telah di ubah');</script>";
                            echo "<script>location='index.php?halaman=detailpertanyaan';</script>";
                        }

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Container fluid  -->
    <!-- End Page wrapper  -->
</body>

</html>