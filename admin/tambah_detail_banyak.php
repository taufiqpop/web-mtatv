<?php
require("koneksi.php");

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
    <title>video jihad</title>
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
                                Tambah Data
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
            <div class="col-14">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Masukan Data</h5>
                        <div class="table-responsive">
                            <form method="POST">
                                <?php
                                $jumlah = $_POST['jumlah'];
                                for ($i = 1; $i <= $jumlah; $i++) { ?>
                                    <label for=""><?php echo $i ?>. Pertanyaan</label>
                                    <div class="mb-3">
                                        <select name="id_jihad[]" class="form-control">
                                            <option value="">Pilih Video</option>
                                            <?php foreach ($datajihadpagi as $key => $value) : ?>
                                                <option value="<?php echo $value["id_jihad"] ?>"><?php echo $value["judul"] ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <textarea type="text" name="tanya[]" class="form-control" placeholder="Masukan Pertanyaan"></textarea>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Time start</label>
                                        <div class="col-lg-3">
                                            <input type="number" name="jam1[]" class="form-control" placeholder="jam">
                                        </div>
                                        <div class="col-lg-3">
                                            <input type="number" name="menit1[]" class="form-control" placeholder="menit">
                                        </div>
                                        <div class="col-lg-3">
                                            <input type="number" name="detik1[]" class="form-control" placeholder="detik">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Time end</label>
                                        <div class="col-lg-3">
                                            <input type="number" name="jam2[]" class="form-control" placeholder="jam">
                                        </div>
                                        <div class="col-lg-3">
                                            <input type="number" name="menit2[]" class="form-control" placeholder="menit">
                                        </div>
                                        <div class="col-lg-3">
                                            <input type="number" name="detik2[]" class="form-control" placeholder="detik">
                                        </div>
                                    </div>
                                    <hr>
                                <?php } ?>
                                <input type="hidden" name="jumlah" value="<?php echo $jumlah; ?>">
                                <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                                <button type="button" class="btn btn-warning" onclick="location.href='index.php?halaman=detailpertanyaan';">Kembali</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Container fluid  -->
        <!-- End Page wrapper  -->
    </div>

    <?php
    if (isset($_POST['simpan'])) {
        $jumlah = $_POST['jumlah'];

        $jam1 = $_POST['jam1'];
        $menit1 = $_POST['menit1'];
        $detik1 = $_POST['detik1'];

        $jam2 = $_POST['jam2'];
        $menit2 = $_POST['menit2'];
        $detik2 = $_POST['detik2'];

        $pertanyaan = $_POST['tanya'];
        $id_jihad = $_POST['id_jihad'];

        for ($i = 0; $i < $jumlah; $i++) {
            $conn->query("INSERT INTO pertanyaan SET
            tanya = '$pertanyaan[$i]',
            waktu_mulai = ('$jam1[$i]'*3600)+('$menit1[$i]'*60)+('$detik1[$i]'),
            waktu_selesai = ('$jam2[$i]'*3600)+('$menit2[$i]'*60)+('$detik2[$i]'),
            id_jihad = '$id_jihad[$i]'") or die(mysqli_error($conn));
        }
        echo "<script>alert('Data telah tersimpan');
    document.location='index.php?halaman=detailpertanyaan'</script>";
    }
    ?>
</body>

</html>