<div class="tab-pane" id="januari2022-02">
    <div class="container">
        <div class="row">
            <table class="table table-bordered table-dark">
                <thead style="text-align: center;">
                    <tr>
                        <th>No</th>
                        <th>Pertanyaan Jihad Pagi</th>
                        <th>Tonton Video</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $nomor = 1; ?>
                    <?php $ambil = $conn->query("SELECT * FROM pertanyaan JOIN jihad_pagi ON
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE pertanyaan.id_jihad=75"); ?>
                    <?php while ($row = $ambil->fetch_assoc()) { ?>
                        <tr>
                            <td style="text-align: center;"><?php echo $nomor ?></td>
                            <td>
                                <?php echo $row['tanya'] ?>
                            </td>
                            <td>
                                <center>
                                    <a href="video-jihad-pagi.php?halaman=video&id=<?php echo $row['id_pertanyaan'] ?>"><button type="button" class="btn btn-warning"><strong>Play</strong></button></a>
                                </center>
                            </td>
                        </tr>
                        <?php $nomor++; ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="tab-pane" id="januari2022-09">
    <div class="container">
        <div class="row">
            <table class="table table-bordered table-dark">
                <thead style="text-align: center;">
                    <tr>
                        <th>No</th>
                        <th>Pertanyaan Jihad Pagi</th>
                        <th>Tonton Video</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $nomor = 1; ?>
                    <?php $ambil = $conn->query("SELECT * FROM pertanyaan JOIN jihad_pagi ON
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE pertanyaan.id_jihad=76"); ?>
                    <?php while ($row = $ambil->fetch_assoc()) { ?>
                        <tr>
                            <td style="text-align: center;"><?php echo $nomor ?></td>
                            <td>
                                <?php echo $row['tanya'] ?>
                            </td>
                            <td>
                                <center>
                                    <a href="video-jihad-pagi.php?halaman=video&id=<?php echo $row['id_pertanyaan'] ?>"><button type="button" class="btn btn-warning"><strong>Play</strong></button></a>
                                </center>
                            </td>
                        </tr>
                        <?php $nomor++; ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="tab-pane" id="januari2022-16">
    <div class="container">
        <div class="row">
            <table class="table table-bordered table-dark">
                <thead style="text-align: center;">
                    <tr>
                        <th>No</th>
                        <th>Pertanyaan Jihad Pagi</th>
                        <th>Tonton Video</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $nomor = 1; ?>
                    <?php $ambil = $conn->query("SELECT * FROM pertanyaan JOIN jihad_pagi ON
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE pertanyaan.id_jihad=77"); ?>
                    <?php while ($row = $ambil->fetch_assoc()) { ?>
                        <tr>
                            <td style="text-align: center;"><?php echo $nomor ?></td>
                            <td>
                                <?php echo $row['tanya'] ?>
                            </td>
                            <td>
                                <center>
                                    <a href="video-jihad-pagi.php?halaman=video&id=<?php echo $row['id_pertanyaan'] ?>"><button type="button" class="btn btn-warning"><strong>Play</strong></button></a>
                                </center>
                            </td>
                        </tr>
                        <?php $nomor++; ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="tab-pane" id="januari2022-30">
    <div class="container">
        <div class="row">
            <table class="table table-bordered table-dark">
                <thead style="text-align: center;">
                    <tr>
                        <th>No</th>
                        <th>Pertanyaan Jihad Pagi</th>
                        <th>Tonton Video</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $nomor = 1; ?>
                    <?php $ambil = $conn->query("SELECT * FROM pertanyaan JOIN jihad_pagi ON
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE pertanyaan.id_jihad=78"); ?>
                    <?php while ($row = $ambil->fetch_assoc()) { ?>
                        <tr>
                            <td style="text-align: center;"><?php echo $nomor ?></td>
                            <td>
                                <?php echo $row['tanya'] ?>
                            </td>
                            <td>
                                <center>
                                    <a href="video-jihad-pagi.php?halaman=video&id=<?php echo $row['id_pertanyaan'] ?>"><button type="button" class="btn btn-warning"><strong>Play</strong></button></a>
                                </center>
                            </td>
                        </tr>
                        <?php $nomor++; ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="tab-pane" id="februari2022-06">
    <div class="container">
        <div class="row">
            <table class="table table-bordered table-dark">
                <thead style="text-align: center;">
                    <tr>
                        <th>No</th>
                        <th>Pertanyaan Jihad Pagi</th>
                        <th>Tonton Video</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $nomor = 1; ?>
                    <?php $ambil = $conn->query("SELECT * FROM pertanyaan JOIN jihad_pagi ON
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE pertanyaan.id_jihad=79"); ?>
                    <?php while ($row = $ambil->fetch_assoc()) { ?>
                        <tr>
                            <td style="text-align: center;"><?php echo $nomor ?></td>
                            <td>
                                <?php echo $row['tanya'] ?>
                            </td>
                            <td>
                                <center>
                                    <a href="video-jihad-pagi.php?halaman=video&id=<?php echo $row['id_pertanyaan'] ?>"><button type="button" class="btn btn-warning"><strong>Play</strong></button></a>
                                </center>
                            </td>
                        </tr>
                        <?php $nomor++; ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="tab-pane" id="februari2022-13">
    <div class="container">
        <div class="row">
            <table class="table table-bordered table-dark">
                <thead style="text-align: center;">
                    <tr>
                        <th>No</th>
                        <th>Pertanyaan Jihad Pagi</th>
                        <th>Tonton Video</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $nomor = 1; ?>
                    <?php $ambil = $conn->query("SELECT * FROM pertanyaan JOIN jihad_pagi ON
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE pertanyaan.id_jihad=80"); ?>
                    <?php while ($row = $ambil->fetch_assoc()) { ?>
                        <tr>
                            <td style="text-align: center;"><?php echo $nomor ?></td>
                            <td>
                                <?php echo $row['tanya'] ?>
                            </td>
                            <td>
                                <center>
                                    <a href="video-jihad-pagi.php?halaman=video&id=<?php echo $row['id_pertanyaan'] ?>"><button type="button" class="btn btn-warning"><strong>Play</strong></button></a>
                                </center>
                            </td>
                        </tr>
                        <?php $nomor++; ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="tab-pane" id="februari2022-20">
    <div class="container">
        <div class="row">
            <table class="table table-bordered table-dark">
                <thead style="text-align: center;">
                    <tr>
                        <th>No</th>
                        <th>Pertanyaan Jihad Pagi</th>
                        <th>Tonton Video</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $nomor = 1; ?>
                    <?php $ambil = $conn->query("SELECT * FROM pertanyaan JOIN jihad_pagi ON
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE pertanyaan.id_jihad=81"); ?>
                    <?php while ($row = $ambil->fetch_assoc()) { ?>
                        <tr>
                            <td style="text-align: center;"><?php echo $nomor ?></td>
                            <td>
                                <?php echo $row['tanya'] ?>
                            </td>
                            <td>
                                <center>
                                    <a href="video-jihad-pagi.php?halaman=video&id=<?php echo $row['id_pertanyaan'] ?>"><button type="button" class="btn btn-warning"><strong>Play</strong></button></a>
                                </center>
                            </td>
                        </tr>
                        <?php $nomor++; ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="tab-pane" id="februari2022-27">
    <div class="container">
        <div class="row">
            <table class="table table-bordered table-dark">
                <thead style="text-align: center;">
                    <tr>
                        <th>No</th>
                        <th>Pertanyaan Jihad Pagi</th>
                        <th>Tonton Video</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $nomor = 1; ?>
                    <?php $ambil = $conn->query("SELECT * FROM pertanyaan JOIN jihad_pagi ON
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE pertanyaan.id_jihad=82"); ?>
                    <?php while ($row = $ambil->fetch_assoc()) { ?>
                        <tr>
                            <td style="text-align: center;"><?php echo $nomor ?></td>
                            <td>
                                <?php echo $row['tanya'] ?>
                            </td>
                            <td>
                                <center>
                                    <a href="video-jihad-pagi.php?halaman=video&id=<?php echo $row['id_pertanyaan'] ?>"><button type="button" class="btn btn-warning"><strong>Play</strong></button></a>
                                </center>
                            </td>
                        </tr>
                        <?php $nomor++; ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>