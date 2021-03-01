<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Register</title>
    <link rel="stylesheet" href="modul/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css.css">
    <script language="Javascript" src="modul/bootstrap-4.3.1-dist/js/bootstrap.min.js"> </script>
    <script src="modul/JQuery/jquery.min.js"></script>
    <!-- CSS dan JS DataTable -->
    <script src="modul/DataTable/datatables.min.js"></script>
    <script src="modul/DataTable/DataTables-1.10.23/js/dataTables.bootstrap4.min.js"></script>
</head>

<html>

<body background="image/dashboard2.jpg">

    <a href="index.php" style="text-decoration: none">
        <div class="header" style="color: wheat;">
            <h1 style="font-family: cursive;">&nbsp; Saeba</h1>
            <h6 style="font-family: Courier New;">&nbsp; Reklame & Percetakan</h6>
        </div>
    </a>

    <!-- ini adalah form register -->
            <form class="form" action="config/register.php" method="POST">
                <h2 style="font-family: cursive;">Daftar</h2>
                <div class="form-row">
                    <label>Nama Depan</label>
                    <input type="text" placeholder="Nama Depan" class='form-control' required maxlength="50" name="namadepan">
                </div>
                <div class="form-row">
                    <label>Nama Belakang</label>
                    <input type="text" placeholder="Nama Belakang" class='form-control' required maxlength="50" name="namabelakang">
                </div>
                <div class="form-row">
                    <label>Username</label>
                    <input type="text" placeholder="Username" class='form-control' required maxlength="50" name="username">
                </div>
                <br>
                <div class="form-row">
                    <label>Email</label>
                    <input type="email" placeholder="Email" class='form-control' required maxlength="50" name="email">
                </div>
                <div class="form-row">
                    <label>Password</label>
                    <input type="password" placeholder="Password" class='form-control' id="pswd1" required maxlength="15" minlength="6" name="password">
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Daftar</button>

                <h6><br> Sudah Punya Akun? <a href="login.php" style="text-decoration: none;">Silahkan Masuk!</a></h6>
            </form>

    <!-- ini adalah form register -->

    <!-- ini adalah footer -->
    &emsp;
    <b style="color: red"> Copyright (C) 18111071_IvanFavian_TIFRP18CIDB_2020</b>
    <!-- ini adalah akhir footer -->

</body>

</html>