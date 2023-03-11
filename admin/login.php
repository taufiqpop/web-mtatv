<?php

error_reporting(0);
session_start();

if ((isset($_COOKIE['id_user']) && $_COOKIE['id_user'] != '') || (isset($_SESSION['id_user']) && $_SESSION['id_user'] != '')) {
    header('location: index.php');
    exit();
}

?>
<style type="text/css">
    /* login
   ========================================================================== */

    .account-wall {
        margin-top: 20px;
        padding: 40px 0 20px 0;
    }

    .background-black {
        margin-top: 8%;
        background-color: #2c3338;
    }

    .groups {
        margin-bottom: 20px;
    }

    .groups input[type="text"],
    .groups input[type="password"] {
        background-color: #3b4148;
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
    }

    .groups input[type="text"]:focus,
    .groups input[type="text"]:hover,
    .groups input[type="password"]:focus,
    .groups input[type="password"]:hover {
        background-color: #434a52;
    }

    .form-input {
        position: relative;
        font-size: 16px;
        height: 50px;
        padding: 10px;
        background-color: #363b41;
        border: 0;
        color: #EEE;
        -webkit-box-shadow: none;
        -moz-box-shadow: none;
        box-shadow: none;
    }

    .form-input:focus {
        -webkit-box-shadow: none;
        -moz-box-shadow: none;
        box-shadow: none;
    }

    .icons {
        background-color: #363b41;
        border: 0;
        min-width: 50px;
        font-size: 18px;
    }

    .logo-title {
        display: block;
        width: 350px;
        height: 135px;
        margin: 0 auto;
        margin-top: 100px;
    }

    .msg-error {
        position: relative;
        top: -10px;
    }
</style>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>Halaman Login</title>

<body class="masuk">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css" />
    <link href="../assets/css/login.css" rel="stylesheet">
    <link href="../assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <div class="container">
        <?php
        include "koneksi.php";

        switch ($_SERVER['QUERY_STRING']) {
            default:
        ?>
        <?php
                break;
        }
        ?>
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4">
                <!-- Logo -->
                <img class="logo-title" src="../assets/images/MTATV.png" />
                <!-- Form -->
                <div class="account-wall">
                    <?php

                    $error = false;
                    $userErr = $passErr = "";

                    if (isset($_POST['signin'])) {
                        $user = $_POST['username'];
                        $password = $_POST['password'];
                        $remember = $_POST['remember'];
                        $user = mysqli_real_escape_string($conn, $user);
                        $password = mysqli_real_escape_string($conn, $password);

                        if ($_SERVER['REQUEST_METHOD'] == "POST") {
                            if (empty($_POST['username'])) {
                                $error = true;
                                $userErr = "Masukkan isi nama pengguna Anda";
                            }

                            if (empty($_POST['password'])) {
                                $error = true;
                                $passErr = "Masukkan isi kata sandi";
                            }
                        }

                        if (!$error) {
                            if ($user && $password) {

                                $login = mysqli_query($conn, "SELECT * FROM user WHERE username='" . $user . "'");
                                if (mysqli_num_rows($login) > 0) {
                                    while ($row = mysqli_fetch_assoc($login)) {
                                        $id = $row['id_user'];
                                        $db_pass = $row['password'];
                                        if ($password == $db_pass) {
                                            $loginok = TRUE;
                                        } else {
                                            $loginok = FALSE;
                                        }

                                        if ($loginok == TRUE) {
                                            if ($remember == "on") {
                                                setcookie("id_user", $id, time() + (86400 * 30));
                                                setcookie("username", $user, time() + (86400 * 30));
                                            } elseif ($remember == "") {
                                                $_SESSION['id_user'] = $id;
                                                $_SESSION['username'] = $user;
                                            }
                                            echo "<meta http-equiv='refresh' content='0; url=#'>";
                                        } else {
                                            $error = true;
                                            echo "<div class='alert alert-danger'>Nama pengguna dan kata sandi Anda salah, silakan coba lagi!</div>";
                                        }
                                    }
                                } else {
                                    $error = true;
                                    echo "<div class='alert alert-danger'>Mohon maaf data Anda tidak di temukan!</div>";
                                }
                            }
                        }
                    }

                    ?>
                    <form action="login.php" method="post">
                        <div class="form-group input-group groups">
                            <span class="input-group-addon icons"><i class="fa fa-user"></i></span>
                            <input type="text" class="form-control form-input" name="username" placeholder="Masukkan isi nama pengguna Anda">
                        </div>
                        <span class="text-danger msg-error"><?php echo $userErr; ?></span>

                        <div class="form-group input-group groups">
                            <span class="input-group-addon icons"><i class="fa fa-lock"></i></span>
                            <input type="password" class="form-control form-input" id="form-password" name="password" placeholder="Masukkan isi kata sandi">
                        </div>
                        <div class="checkboxcss" style="color:black; float:right;"><input type="checkbox" onchange="document.getElementById('form-password').type = this.checked ? 'text' : 'password'">Lihat Kata Sandi</div>
                        <span class="text-danger msg-error"><?php echo $passErr; ?></span>
                        <div class="form-group">
                            <div class="checkboxcss" style="color:black;"><input type="checkbox" name="remember" value="on">Ingat Saya</div>
                        </div>
                        <button type="submit" class="btn btn-lg btn-primary btn-block" name="signin">Masuk</button>
                    </form>
                </div>

            </div>
        </div>
    </div>