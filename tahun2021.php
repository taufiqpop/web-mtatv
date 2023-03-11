<div class="tab-pane" id="januari2021-17">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE  pertanyaan.id_jihad IN (34,144,145,146)"); ?>
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

<div class="tab-pane" id="januari2021-24">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE  pertanyaan.id_jihad IN (35,147,148,149)"); ?>
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

<div class="tab-pane" id="januari2021-31">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE  pertanyaan.id_jihad IN (36,150,151,152,153,154,155,156,157)"); ?>
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

<div class="tab-pane" id="februari2021-07">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE  pertanyaan.id_jihad IN (37,158,159,160)"); ?>
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

<div class="tab-pane" id="februari2021-14">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE  pertanyaan.id_jihad IN (38,161,162,163,164,165,166,167)"); ?>
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

<div class="tab-pane" id="februari2021-21">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE  pertanyaan.id_jihad=39"); ?>
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

<div class="tab-pane" id="maret2021-07">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE  pertanyaan.id_jihad IN (40,168)"); ?>
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

<div class="tab-pane" id="maret2021-14">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE  pertanyaan.id_jihad IN (41,169)"); ?>
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

<div class="tab-pane" id="maret2021-21">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE  pertanyaan.id_jihad=42"); ?>
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

<div class="tab-pane" id="maret2021-28">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE  pertanyaan.id_jihad IN (43,170)"); ?>
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

<div class="tab-pane" id="april2021-04">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE  pertanyaan.id_jihad=171"); ?>
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

<div class="tab-pane" id="april2021-11">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE  pertanyaan.id_jihad=44"); ?>
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

<div class="tab-pane" id="april2021-25">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE  pertanyaan.id_jihad=45"); ?>
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

<div class="tab-pane" id="mei2021-02">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE  pertanyaan.id_jihad=172"); ?>
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

<div class="tab-pane" id="mei2021-09">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE  pertanyaan.id_jihad=173"); ?>
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

<div class="tab-pane" id="mei2021-16">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE  pertanyaan.id_jihad=174"); ?>
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

<div class="tab-pane" id="mei2021-23">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE  pertanyaan.id_jihad IN (175,176,177,178,179,180,181)"); ?>
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

<div class="tab-pane" id="mei2021-30">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE  pertanyaan.id_jihad IN (46,182)"); ?>
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

<div class="tab-pane" id="juni2021-06">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE  pertanyaan.id_jihad IN (47,183)"); ?>
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

<div class="tab-pane" id="juni2021-13">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE  pertanyaan.id_jihad IN (48,49)"); ?>
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

<div class="tab-pane" id="juli2021-11">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE  pertanyaan.id_jihad=50"); ?>
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

<div class="tab-pane" id="juli2021-18">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE  pertanyaan.id_jihad IN (51,184,185,186)"); ?>
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

<div class="tab-pane" id="juli2021-25">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE  pertanyaan.id_jihad IN (187,188,189)"); ?>
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
<!-- 25juli -->

<div class="tab-pane" id="agustus2021-01">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE  pertanyaan.id_jihad=190"); ?>
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

<div class="tab-pane" id="agustus2021-08">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE  pertanyaan.id_jihad=191"); ?>
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

<div class="tab-pane" id="agustus2021-15">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE  pertanyaan.id_jihad=53"); ?>
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


<div class="tab-pane" id="agustus2021-22">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE  pertanyaan.id_jihad=54"); ?>
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

<div class="tab-pane" id="agustus2021-29">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE  pertanyaan.id_jihad=55"); ?>
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

<div class="tab-pane" id="september2021-05">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE  pertanyaan.id_jihad=56"); ?>
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

<div class="tab-pane" id="september2021-12">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE  pertanyaan.id_jihad IN (57,192,193)"); ?>
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

<div class="tab-pane" id="september2021-19">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE  pertanyaan.id_jihad=194"); ?>
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

<div class="tab-pane" id="september2021-26">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE  pertanyaan.id_jihad IN (58,195,196,197,198,199,200)"); ?>
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

<div class="tab-pane" id="oktober2021-03">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE pertanyaan.id_jihad IN (201,202,203,204,205,206,207,208,209)"); ?>
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

<div class="tab-pane" id="oktober2021-10">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE pertanyaan.id_jihad IN (59,60,61,62,210,211,212,213,214,215)"); ?>
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

<div class="tab-pane" id="oktober2021-17">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE pertanyaan.id_jihad IN (216,217,218,219,220,221,222,223)"); ?>
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

<div class="tab-pane" id="oktober2021-24">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE pertanyaan.id_jihad IN (63,64,65,66,224,225,226,227)"); ?>
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

<div class="tab-pane" id="oktober2021-31">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE pertanyaan.id_jihad=67"); ?>
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

<div class="tab-pane" id="november2021-07">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE pertanyaan.id_jihad IN (68,228,229,230)"); ?>
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

<div class="tab-pane" id="november2021-14">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE pertanyaan.id_jihad=231"); ?>
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


<div class="tab-pane" id="november2021-21">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE pertanyaan.id_jihad=69"); ?>
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

<div class="tab-pane" id="november2021-28">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE pertanyaan.id_jihad=70"); ?>
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

<div class="tab-pane" id="desember2021-05">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE pertanyaan.id_jihad=71"); ?>
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

<div class="tab-pane" id="desember2021-12">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE pertanyaan.id_jihad=72"); ?>
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

<div class="tab-pane" id="desember2021-19">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE pertanyaan.id_jihad=73"); ?>
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

<div class="tab-pane" id="desember2021-26">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE pertanyaan.id_jihad=74"); ?>
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