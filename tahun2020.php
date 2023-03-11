<div class="tab-pane show active" id="januari2020-05">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE  pertanyaan.id_jihad=1"); ?>
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

<div class="tab-pane" id="januari2020-19">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE  pertanyaan.id_jihad=2"); ?>
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

<div class="tab-pane" id="januari2020-26">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE  pertanyaan.id_jihad=3"); ?>
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

<div class="tab-pane" id="februari2020-02">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE  pertanyaan.id_jihad=4"); ?>
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

<div class="tab-pane" id="februari2020-09">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE  pertanyaan.id_jihad=5"); ?>
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

<div class="tab-pane" id="februari2020-16">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE  pertanyaan.id_jihad=6"); ?>
                    <?php while ($row = $ambil->fetch_assoc()) { ?>
                        <tr>
                            <td style="text-align: center;"><?php echo $nomor ?></td>
                            <td>
                                <?php echo $row['tanya'] ?>
                            </td>
                            <td>
                                <a href="video-jihad-pagi.php?halaman=video&id=<?php echo $row['id_pertanyaan'] ?>" class="btn btn-warning"><strong>Play</strong></a>
                            </td>
                        </tr>
                        <?php $nomor++; ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class=" tab-pane" id="februari2020-23">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE  pertanyaan.id_jihad IN (7,83,84,85,86,87,88,89,90,91,92,93)"); ?>
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

<div class="tab-pane" id="maret2020-01">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE  pertanyaan.id_jihad=8"); ?>
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

<div class="tab-pane" id="maret2020-08">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE  pertanyaan.id_jihad IN (9,94,95,96,97,98)"); ?>
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

<div class="tab-pane" id="april2020-12">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE  pertanyaan.id_jihad=12"); ?>
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

<div class="tab-pane" id="april2020-26">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE  pertanyaan.id_jihad=13"); ?>
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

<div class="tab-pane" id="mei2020-10">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE  pertanyaan.id_jihad=14"); ?>
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

<div class="tab-pane" id="mei2020-17">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE  pertanyaan.id_jihad=15"); ?>
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

<div class="tab-pane" id="mei2020-31">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE  pertanyaan.id_jihad=16"); ?>
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

<div class="tab-pane" id="juni2020-07">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE  pertanyaan.id_jihad=17"); ?>
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

<div class="tab-pane" id="juni2020-14">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE  pertanyaan.id_jihad IN (18,99,100,101)"); ?>
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

<div class="tab-pane" id="juni2020-21">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE  pertanyaan.id_jihad IN (19,102)"); ?>
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

<div class="tab-pane" id="juli2020-05">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE  pertanyaan.id_jihad IN (20,103,104,105,106,107)"); ?>
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

<div class="tab-pane" id="juli2020-12">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE  pertanyaan.id_jihad IN (21,108,109,110)"); ?>
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

<div class="tab-pane" id="juli2020-19">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE  pertanyaan.id_jihad IN (22,111,112,113)"); ?>
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

<div class="tab-pane" id="juli2020-26">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE  pertanyaan.id_jihad IN (23,114)"); ?>
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

<div class="tab-pane" id="agustus2020-02">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE  pertanyaan.id_jihad IN (24,115,116,117)"); ?>
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

<div class="tab-pane" id="agustus2020-09">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE  pertanyaan.id_jihad IN (25,118,119)"); ?>
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

<div class="tab-pane" id="agustus2020-16">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE  pertanyaan.id_jihad IN (26,120,121,122,123,124)"); ?>
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

<div class="tab-pane" id="agustus2020-23">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE  pertanyaan.id_jihad=27"); ?>
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

<div class="tab-pane" id="agustus2020-30">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE  pertanyaan.id_jihad IN (28,125,126,127)"); ?>
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

<div class="tab-pane" id="november2020-29">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE  pertanyaan.id_jihad IN (29,128,129,130)"); ?>
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

<div class="tab-pane" id="desember2020-06">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE  pertanyaan.id_jihad IN (30,131,132,133)"); ?>
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

<div class="tab-pane" id="desember2020-13">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE  pertanyaan.id_jihad IN (31,134,135,136,137,138,139)"); ?>
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

<div class="tab-pane" id="desember2020-20">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE  pertanyaan.id_jihad IN (32,140,141,142)"); ?>
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

<div class="tab-pane" id="desember2020-27">
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
                                    pertanyaan.id_jihad=jihad_pagi.id_jihad WHERE  pertanyaan.id_jihad IN (33,143)"); ?>
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