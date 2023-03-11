<?php
require("koneksi.php");
$ambil = $conn->query("SELECT * FROM jihad_pagi WHERE id_jihad='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$conn->query("DELETE FROM jihad_pagi WHERE id_jihad='$_GET[id]'");

echo "<script>alert('Data terhapus');</script>";
echo "<script>location='index.php?halaman=JihadPagi';</script>";
