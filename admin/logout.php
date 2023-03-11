<?php
session_start();

setcookie('id_user','', time() - 3600);
session_destroy();

echo "<script>document.location = 'login.php'; </script>";
?>

