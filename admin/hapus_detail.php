<?php
require("koneksi.php");

$conn->query("DELETE FROM pertanyaan WHERE id_pertanyaan='$_GET[id]'");

echo "<script>alert('Data Berhasil Terhapus');</script>";
echo "<script>location='index.php?halaman=detailpertanyaan';</script>";
