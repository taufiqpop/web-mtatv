<?php
if (isset($_POST['simpan'])) {
  $link = $_POST['link'];
  $result = mysqli_query($conn, "update video set link='$link' where jenis = 'live' ");

  if ($result) {
    echo "<script>
    window.alert('Link Streaming YouTube Sudah di ubah');
    window.location = 'index.php?halaman=live';
    </script>";
  } else {
    echo '<script>
    window.alert("gagal");
    </script>';
  }
}
$ambil = $conn->query("SELECT * FROM video where jenis = 'live'");
$row = mysqli_fetch_array($ambil);
?>
<title>Live Streaming MTATV 24 Jam</title>
<div style="margin-left: 25px; margin-right: 25px;">
  <p>
  <form method="POST">
    <input type="text" name="link" value="<?php echo $row['link'] ?>">
    <button type="submit" name="simpan" class="btn btn-sm btn-primary">
      Simpan Pertanyaan</button>


  </form>
  </p>
  <iframe width="100%" height="720" src="https://www.youtube.com/embed/<?php echo $row['link'] ?>?rel=0&amp;autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

  <br>

</div>