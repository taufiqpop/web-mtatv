<?php
require("koneksi.php");

$ambil = $conn->query("SELECT * FROM jihad_pagi WHERE id_jihad='$_GET[id]'");
$row = $ambil->fetch_assoc();

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
    <title>edit video</title>
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
                                Edit Video
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
                        <h5 class="card-title">Edit Video</h5>
                        <form method="POST">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Judul Video</label>
                                <input type="text" name="judul" class="form-control" value="<?php echo $row['judul']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                                <input type="date" name="tanggal" class="form-control" value="<?php echo $row['tanggal']; ?>">
                            </div>
                            <div class=" mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Link Video</label>
                                <textarea name="link" class="form-control" rows="3"><?php echo $row['link']; ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Diskripsi</label>
                                <textarea name="deskripsi" class="form-control" rows="3"><?php echo $row['deskripsi']; ?></textarea>
                            </div>
                            <button type="submit" name="edit" class="btn btn-primary">Simpan</button>
                            <button type="button" class="btn btn-warning" onclick="location.href='index.php?halaman=JihadPagi';">Kembali</button>
                        </form>

                        <?php
                        if (isset($_POST['edit'])) {
                            $conn->query("UPDATE jihad_pagi SET judul='$_POST[judul]',
                                link='$_POST[link]',tanggal='$_POST[tanggal]',deskripsi='$_POST[deskripsi]'
                                WHERE id_jihad='$_GET[id]'");
                            echo "<script>alert('Data video telah di ubah');</script>";
                            echo "<script>location='index.php?halaman=JihadPagi';</script>";
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