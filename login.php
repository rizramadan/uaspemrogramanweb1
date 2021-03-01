<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="modul/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css.css">
    <script language="Javascript" src="modul/bootstrap-4.3.1-dist/js/bootstrap.min.js"> </script>
    <script src="modul/JQuery/jquery.min.js"></script>
    <!-- CSS dan JS DataTable -->
    <script src="modul/DataTable/datatables.min.js"></script>
    <script src="modul/DataTable/DataTables-1.10.23/js/dataTables.bootstrap4.min.js"></script>
</head>

<html>

<body background="image/dashboard.png">

    <a href="index.php" style="text-decoration: none">
        <div class="header" style="color: wheat;">
            <h1 style="font-family: cursive;">&nbsp; Saeba</h1>
            <h6 style="font-family: Courier New;">&nbsp; Reklame & Percetakan</h6>
        </div>
    </a>

    <!-- ini adalah form login -->

    <form class="form" action="config/login.php" method="POST">
        <h2 style="font-family: cursive;">Masuk</h2>
        <div class="form-row">
            <label>Username</label>
            <input type="text" placeholder="Username" class='form-control' required maxlength="50" name="username">
        </div>
        <div class="form-group form-row">
            <label>Password</label>
            <input type="password" placeholder="Password" class='form-control' required minlength="3" name="password">
            <p style="font-family: cursive;"><input type="checkbox" name="rememberme" value="" /> Remember me</p>
        </div> <br>
        <button type="submit" class="btn btn-primary" name="login">Login</button><br><br>

        <h6>Lupa <a href="" style="text-decoration: none;"> Username/Password?</a></h6>
        <h6>Belum Punya Akun? <a href="register.php" style="text-decoration: none;">Daftar Disini!</a></h6>
    </form>

    <!-- ini adalah akhir form login -->

    <!-- ini adalah footer -->
    &emsp;
    <b style="color: red"> @Copyright by 18111071_IvanFavian_TIFRP18CIDB_UASWEB1</b>
    <!-- ini adalah akhir footer -->

</body>

</html>