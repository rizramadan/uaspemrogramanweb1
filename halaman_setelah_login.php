<?php
$baseUrl = 'http://localhost/uasweb1';
include 'session.php';
include 'config/data_pendaftar.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reklame & Percetakan Saeba</title>
    <link rel="stylesheet" href="modul/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css.css">
    <script language="Javascript" src="modul/bootstrap-4.3.1-dist/js/bootstrap.min.js"> </script>
    <script src="modul/JQuery/jquery.min.js"></script>
    <!-- CSS dan JS DataTable -->
    <script src="modul/DataTable/datatables.min.js"></script>
    <script src="modul/DataTable/DataTables-1.10.23/js/dataTables.bootstrap4.min.js"></script>
</head>

<html>

<body>
    <tbody>
        <?php while ($row = $q->fetch()) :
            $id = $row['id'];
            $namadepan = $row['nama_depan'];
            $namabelakang = $row['nama_belakang'];
            $namalengkap = $namadepan . " " . $namabelakang;
        ?>

        <?php endwhile; ?>

    </tbody>
    <!-- ini adalah header -->
    <div class="col-md-12-full">
        <nav class="navbar">
            <ul type="none">
                <a href="halaman_setelah_login.php" style="text-decoration: none">
                    <div class="header" style="color: wheat;">
                        <h1 style="font-family: cursive;">Saeba</h1>
                        <h6 style="font-family: Courier New;">Reklame & Percetakan</h6>
                    </div>
                </a>
            </ul>
            <ul type="none">
                <form action="view_profile.php" method="POST">
                    <p style="font-family: cursive;">
                        <input type="hidden" name="id" value="<?php echo $id; ?>" />
                        <a href="<?php echo $baseUrl ?>/view_profile.php?id=<?php echo $id; ?>" class="btn btn-info" style="font-family: cursive;">View Profile</a>
                        Hai, <td><?php echo $namalengkap; ?></td> ! &emsp;&emsp; 085721614364 | order@saeba.id
                    </p>
                </form>
                <a href="config/logout.php" class="btn btn-secondary" style="float: right;">Keluar</a>
            </ul>
        </nav>
    </div>

    <!-- ini adalah akhir header -->

    <!-- ini adalah headline website -->
    <div class="container-full">
        <div class="jumbotron">
            <font size="32">
                <b>Reklame dan Percetakan Murah <br> di Cikarang</b>
            </font>
            <font size="4">
                <p> <b style="font-style: italic;">
                        Saeba membantu Anda untuk kebutuhan percetakan bisnis personal atau perusahaan <br>
                        di sekitar Cikarang jadi lebih mudah, praktis, cepat, dan <r> murah</r> tanpa <r> minimum order.
                        </r></b>
                </p>
            </font>
            <a class="btn btn-primary btn-large" href="pesansekarangsesudahlogin.php" style="font-family: cursive;">Pesan
                Sekarang</a>

        </div>
    </div>
    <!-- ini adalah akhir headline website -->

    <!-- ini adalah body isi -->
    <center>
        <h3 style="font-family: monospace;">Produk Kami</h3>
    </center>

    <div class="body">
        <div class="row" style="margin-right: 10px;">
            <div class="col-md-4">
                <div class="card" style="width: 25rem;">
                    <a href="detailsablonsesudahlogin.php"><img class="gambar" src="image/baju.jpg" class="card-img-top" alt=""></a>
                    <div class="card-body">
                        <center>
                            <h5 class="card-title" style="font-family: cursive;">Sablon Baju</h5>
                            <h6 style="font-family: cursive;">
                                Mulai dari Rp.55.000
                            </h6>
                        </center>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 25rem;">
                    <a href="detailmerktimbulsesudahlogin.php"><img class="gambar" src="image/merk timbul.jpg" class="card-img-top" alt=""></a>
                    <div class="card-body">
                        <center>
                            <h5 class="card-title" style="font-family: cursive;">Merk Timbul</h5>
                            <h6 style="font-family: cursive;">
                                Mulai dari Rp.850.000
                            </h6>
                        </center>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" style="width: 25rem;">
                    <a href="detailspanduksesudahlogin.php"><img class="gambar" src="image/spanduk.JPG" class="card-img-top" alt=""></a>
                    <div class="card-body">
                        <center>
                            <h5 class="card-title" style="font-family: cursive;">Spanduk</h5>
                            <h6 style="font-family: cursive;">
                                Mulai dari Rp.100.000
                            </h6>
                        </center>
                    </div>
                </div>
            </div>
        </div> <br>

        <div class="row" style="margin-right: 10px;">
            <div class="col-md-4">
                <div class="card" style="width: 25rem;">
                    <a href="detailneonboxsesudahlogin.php"><img class="gambar" src="image/neon box.jpg" class="card-img-top" alt=""></a>
                    <div class="card-body">
                        <center>
                            <h5 class="card-title" style="font-family: cursive;">Neon Box</h5>
                            <h6 style="font-family: cursive;">
                                Mulai dari Rp.1.000.000
                            </h6>
                        </center>
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="card" style="width: 25rem;">
                    <a href="detailakriliksesudahlogin.php"><img class="gambar" src="image/akrilik.jpg" class="card-img-top" alt=""></a>
                    <div class="card-body">
                        <center>
                            <h5 class="card-title" style="font-family: cursive;">Akrilik</h5>
                            <h6 style="font-family: cursive;">
                                Mulai dari Rp.350.000
                            </h6>
                        </center>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" style="width: 25rem;">
                    <a href="detailbrosursesudahlogin.php"><img class="gambar" src="image/brosur.jpg" class="card-img-top" alt=""></a>
                    <div class="card-body">
                        <center>
                            <h5 class="card-title" style="font-family: cursive;">Brosur</h5>
                            <h6 style="font-family: cursive;">
                                Mulai dari Rp.20.000
                            </h6>
                        </center>
                    </div>
                </div>
            </div>
        </div> <br>
    </div>
    <!-- ini adalah akhir body isi -->

    <!-- ini adalah footer -->
    <div class="container-fluid" style="background: cornflowerblue;">

        <div class="row">
            <div class="col-md-12">
                <h5> <b> Reklame & Percetakan Saeba</b></h5>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">

                <b>Alamat</b> <br> Jl. Raya Industri Jl. Jababeka Raya,<br> Pasirgombong, Kec. Cikarang Utara, <br> Bekasi, Jawa Barat<br> 17530 <br> (Samping Pom Bensin, Pool GMS) <br>
                <b>Hari dan Jam Kerja:</b> <br> Senin - Jumat: 9:00-17.00 WIB
            </div>

            <div class="col-md-4">
                <b>Telepon:</b> <br> (+62) 857-7332-4386 <br>
                <b>WhatsApp:</b> <br> 0896 9698 4699 <br>
                <b>Email:</b> <br>order@saeba.id
            </div>

            <div class="col-md-4">
                <b>Produk Kami:</b> <br> - Pencetakan Digital <br> - Spanduk <br> - Merk Timbul <br> - Sablon Baju <br> - Selebaran & Brosur <br> - Baligho <br> - Neon Box <br> - Akrilik <br> - Kalender <br>

            </div>
        </div>
    </div>
    <!-- ini adalah akhir footer -->

    <!-- ini adalah subfooter -->
    <div class="row" style="margin-right: 1px;">
        <div class="col-md-12" style="background-color: gray;">
            <h6><b> &emsp; @Copyright by 18111071_IvanFavian_TIFRP18CIDB_UASWEB1
                    <h6 style="text-align:right;"><a class="back" id="backtoTop" onclick="scrollToTop()" href="#" style="color:#990000;">&uarr;Back to Top</a></h6>
                </b></h6>
        </div>
    </div>
    <!-- ini adalah akhir subfooter -->
</body>
<script>
    function scrollToTop() {
        window.scrollTo(0, 0);
    }
</script>

</html>