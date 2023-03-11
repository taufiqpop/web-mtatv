<?php
error_reporting(E_ALL ^ E_NOTICE);
include "koneksi.php";
session_start();
if (isset($_COOKIE['id_user']) && $_COOKIE['id_user'] != '') {
  $id = $_GET['id_user'];
} else if (isset($_SESSION['id_user']) && $_SESSION['id_user'] != '') {
  $id = $_SESSION['id_user'];
} else {
  header('location: login.php');
  exit();
}
?>
<?php
require("koneksi.php")
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template" />
  <meta name="description" content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework" />
  <meta name="robots" content="noindex,nofollow" />
  <link rel="icon" type="image/png" sizes="16x16" href="assets/images/logo.png" />
  <link href="../assets/libs/flot/css/float-chart.css" rel="stylesheet" />
  <link href="../assets/dist/css/style.min.css" rel="stylesheet" />
  <!-- Custom CSS -->
  <link rel="stylesheet" type="text/css" href="../assets/extra-libs/multicheck/multicheck.css" />
  <link href="../assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet" />
  <link href="../assets/dist/css/style.min.css" rel="stylesheet" />

</head>

<body>
  <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    <header class="topbar" data-navbarbg="skin5">
      <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-heade  r" data-logobg="skin5">
          <!-- Logo -->
          <a class="navbar-brand" href="index.php">
            <b class="logo-icon ps-2">
              <img src="../assets/images/logo.png" alt="homepage" class="light-logo" width="25" />
            </b>
            <span class="logo-text ms-2">
              MTATV - ADMIN
            </span>
            <!-- END LOGO -->
          </a>
          <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
        </div>
        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
          <ul class="navbar-nav float-start me-auto">
            <li class="nav-item d-none d-lg-block">
              <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a>
            </li>
            <!-- <li class="nav-item mt-3>
              <a class=" btn btn-danger" href="index.php?halaman=logout" aria-expanded="false"><i class="mdi mdi-exit-to-app"></i><span class="hide-menu">Logout</span></a>
            </li> -->
          </ul>
        </div>
      </nav>
    </header>

    <aside class="left-sidebar" data-sidebarbg="skin5">
      <div class="scroll-sidebar">
        <nav class="sidebar-nav">
          <ul id="sidebarnav" class="pt-4">
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.php" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.php?halaman=JihadPagi" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Video Jihad</span></a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.php?halaman=detailpertanyaan" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Detail Pertanyaan</span></a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.php?halaman=logout" aria-expanded="false"><i class="mdi mdi-exit-to-app"></i><span class="hide-menu">Logout</span></a>
            </li>
          </ul>
        </nav>
      </div>
    </aside>
    <div id="page-wrapper">
      <div class="page-wrapper">
        <div id="page-inner">
          <?php
          if (@$_GET) {
            switch ($_GET['halaman']) {
              case "live";
                include "live.php";
                break;
              case "JihadPagi";
                include "jihadpagi.php";
                break;
              case "tambahjihad";
                include "tambahjihad.php";
                break;
              case "hapusjihad";
                include "hapusjihad.php";
                break;
              case "editjihad";
                include "editjihad.php";
                break;
                // batas
              case "kategori";
                include "kategori.php";
                break;
              case "detailpertanyaan";
                include "detail_pertanyaan.php";
                break;
              case "tambahdetail";
                include "tambah_detail.php";
                break;
              case "tambahdetailbanyak";
                include "tambah_detail_banyak.php";
                break;
              case "hapusdetail";
                include "hapus_detail.php";
                break;
              case "editdetail";
                include "edit_detail.php";
                break;
                // batas
              case "pertanyaan";
                include "pertanyaan.php";
                break;
              case "tambahpertanyaan";
                include "tambahpertanyaan.php";
                break;
              case "editpertanyaan";
                include "editpertanyaan.php";
                break;
                // batas
              case "hapuspertanyaan";
                include "hapuspertanyaan.php";
                break;
              case "komentar";
                include "komentar.php";
                break;
              case "jadwal";
                include "jadwal.php";
                break;
              case "popular";
                include "popular.php";
                break;
              case "tambahpopular";
                include "tambahpopular.php";
                break;
              case "editpopular";
                include "editpopular.php";
                break;
              case "hapuspopular";
                include "hapuspopular.php";
                break;
              case "logout";
                include "logout.php";
                break;
              default:
                echo '
                        <div class="container-fluid">
                          <!-- 404 Error Text -->
                          <div class="text-center">
                            <div class="error mx-auto" data-text="404">404</div>
                              <p class="lead text-gray-800 mb-5">Page Not Found</p>
                              <p class="text-gray-500 mb-0">It looks like you found a glitch in the matrix...</p>
                              <a href="index.php">&larr; Back to Dashboard</a>
                            </div>
                          </div>';
                break;
            }
          } else {
            include "home.php";
          }
          ?>
        </div>
      </div>
    </div>
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../assets/extra-libs/sparkline/sparkline.js"></script>
    <script src="../assets/dist/js/waves.js"></script>
    <script src="../assets/dist/js/sidebarmenu.js"></script>
    <script src="../assets/dist/js/custom.min.js"></script>
    <script src="../assets/libs/flot/excanvas.js"></script>
    <script src="../assets/libs/flot/jquery.flot.js"></script>
    <script src="../assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="../assets/libs/flot/jquery.flot.time.js"></script>
    <script src="../assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="../assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="../assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="../assets/dist/js/pages/chart/chart-page-init.js"></script>
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <!-- <script src="../assets/dist/js/waves.js"></script> -->
    <!--Menu sidebar -->
    <script src="../assets/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <!-- <script src="../assets/dist/js/custom.min.js"></script> -->
    <!-- this page js -->
    <script src="../assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="../assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="../assets/extra-libs/DataTables/datatables.min.js"></script>
    <script script>
      /****************************************
       *       Basic Table                   *
       ****************************************/
      $("#zero_config").DataTable();
    </script>
</body>

</html>