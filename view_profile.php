<?php
$baseUrl = 'http://localhost/uasweb1';
include 'session.php';
$idreg = $_GET["id"];
require_once 'config/koneksi.php';
include 'config/data_pendaftar.php';

try {
  $sql = "SELECT biodata.id, biodata.id_pendaftar, biodata.foto, 
  biodata.alamat, biodata.telp, data_pendaftar.nama_depan, data_pendaftar.nama_belakang,
  data_pendaftar.email, data_pendaftar.username, data_pendaftar.password 
  FROM data_pendaftar data_pendaftar INNER JOIN biodata biodata ON biodata.id_pendaftar = data_pendaftar.id WHERE data_pendaftar.id=?";
  $q = $database_connection->prepare($sql);
  $q->execute([$idreg]);
} catch (PDOException $e) {
  die("Tidak Bisa Membuka Database $database_name :" . $e->getMessage());
}

foreach ($q as $row) {
  $id = $row['id'];
  $namadepan = $row['nama_depan'];
  $namabelakang = $row['nama_belakang'];
  $namalengkap = $namadepan . " " . $namabelakang;
  $email = $row['email'];
  $username = $row['username'];
  $foto = $row['foto'];
  $alamat = $row['alamat'];
  $telp = $row['telp'];
  $password = $row['password'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Profile</title>
  <link rel="stylesheet" href="modul/bootstrap-4.3.1-dist/css/bootstrap.min.css">
  <script language="Javascript" src="modul/bootstrap-4.3.1-dist/js/bootstrap.min.js"> </script>
  <script src="modul/JQuery/jquery.min.js"></script>
  <!-- CSS dan JS DataTable -->
  <script src="modul/DataTable/datatables.min.js"></script>
  <script src="modul/DataTable/DataTables-1.10.23/js/dataTables.bootstrap4.min.js"></script>
</head>

<body style="background-color: teal;">
  <div class="container">
    <table id="dataregister" class="table table-striped table-bordered" style="width:100%">
      <tbody>
        <?php while ($row = $q->fetch()) :
          $id = $row['id'];
          $namadepan = $row['nama_depan'];
          $namabelakang = $row['nama_belakang'];
          $namalengkap = $namadepan . " " . $namabelakang;
          $email = $row['email'];
          $foto = $row['foto'];
          $username = $row['username'];
          $telp = $row['telp'];
          $alamat = $row['alamat'];
          $password = $row['password'];
        ?>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>
  <div class="container">
    <div class="main-body">
      <!-- breadcrumb -->
      <nav aria-label="breadcrumb" class="main-breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active" style="font-family: cursive;">User Profile</li>
        </ol>
      </nav>
      <!-- end breadcrumb -->

      <div class="row gutters-sm">
        <div class="col-md-4 mb-3">
          <div class="card">
            <div class="card-body">
              <div class="d-flex flex-column align-items-center text-center">
                <img src="<?php echo $foto; ?>" class="rectangle" width="320" height="350">
                <div class="mt-3">
                  <h4 style="font-family: cursive;">Foto Profile</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <div class="card mb-3">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0" style="font-family: cursive;">Nama Lengkap</h6>
                </div>
                <div class="col-sm-9 text-secondary" style="font-family: cursive;">: <?php echo $namalengkap; ?></div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0" style="font-family: cursive;">Email</h6>
                </div>
                <div class="col-sm-9 text-secondary" style="font-family: cursive;">: <?php echo $email; ?> </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0" style="font-family: cursive;">Username</h6>
                </div>
                <div class="col-sm-9 text-secondary" style="font-family: cursive;">: <?php echo $username; ?></div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0" style="font-family: cursive;">Alamat Pengiriman</h6>
                </div>
                <div class="col-sm-9 text-secondary" style="font-family: cursive;">: <?php echo $alamat; ?> </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0" style="font-family: cursive;">Telepon</h6>
                </div>
                <div class="col-sm-9 text-secondary" style="font-family: cursive;">: <?php echo $telp; ?> </div>
              </div>
              <hr>
              <!-- <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0" style="font-family: cursive;">Password</h6>
                </div>
                <div class="col-sm-9 text-secondary" style="font-family: cursive;"><?php echo $password; ?> </div>
              </div>
              <hr> -->
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <!-- form edit profile -->
              <form action="edit_profile.php" method="POST">
                <input type="hidden" name="id_reg" value="<?php echo $id; ?>" />
                <input type="hidden" name="namadepan" value="<?php echo $namadepan; ?>" />
                <input type="hidden" name="namabelakang" value="<?php echo $namabelakang; ?>" />
                <input type="hidden" name="email" value="<?php echo $email; ?>" />
                <input type="hidden" name="username" value="<?php echo $username; ?>" />
                <input type="hidden" name="alamat" value="<?php echo $alamat; ?>" />
                <input type="hidden" name="telp" value="<?php echo $telp; ?>" />
                <input type="hidden" name="password" value="<?php echo $password; ?>" />
                <a href="<?php echo $baseUrl ?>/edit_profile.php?id=<?php echo $idreg; ?>" class="btn btn-primary" style="font-family: cursive;">Edit Profile</a>
              </form>
            </div>
            <!-- form edit delete -->
            <div class="col-md-4">
              <form action="config/hapus.php" method="POST">
                <input type="hidden" name="id_reg" value="<?php echo $id; ?>" />
                <a href="<?php echo $baseUrl; ?>/config/hapus.php?id=<?php echo $idreg; ?>" class="btn btn-danger" style="font-family: cursive;" onclick="return confirm('Apakah anda yakin ingin menghapus akun?')">Hapus Akun</a>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="row" style="margin-right: 1px;">
        <div class="col-md-12" style="background-color: gray;">
          <h6><b> &emsp; @Copyright by 18111071_IvanFavian_TIFRP18CIDB_UASWEB1
            </b></h6>
        </div>
      </div>
    </div>
  </div>
</body>

</html>