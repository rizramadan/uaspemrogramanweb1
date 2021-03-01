<?php
include 'session.php';
require_once 'config/koneksi.php';
include 'config/data_pendaftar.php';
$id_register = $_GET["id"];


try {
	// $sql = "SELECT biodata.id, biodata.id_pendaftar, biodata.foto, 
	// biodata.alamat, biodata.telp, data_pendaftar.nama_depan, data_pendaftar.nama_belakang,
	// data_pendaftar.email, data_pendaftar.username, data_pendaftar.password
	// FROM biodata RIGHT JOIN data_pendaftar ON biodata.id = data_pendaftar.id WHERE data_pendaftar.id=?";
	// $q = $database_connection->prepare($sql);
	// $q->execute([$id_register]);

	$sql = "SELECT a.id, a.nama_depan, a.nama_belakang, a.email, a.email, a.password , b.id AS id_biodata, b.id_pendaftar, b.foto, b.alamat, b.telp FROM data_pendaftar a INNER JOIN biodata b ON a.id = b.id_pendaftar WHERE b.id_pendaftar = ?;";
	$q = $database_connection->prepare($sql);
	$q->execute([$id_register]); // jalankan query
	$q->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
	die("Tidak Bisa Membuka Database $database_name :" . $e->getMessage());
}

foreach ($q as $row) {
	$foto = $row['foto'];
	$nama_depan = $row['nama_depan'];
	$nama_belakang = $row['nama_belakang'];
	$email = $row['email'];
	$telp = $row['telp'];
	$alamat = $row['alamat'];
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
<html>

<body style="background-color: teal;">
	<div class="container">
		<div class="main-body">
			<!-- breadcrumb -->
			<nav aria-label="breadcrumb" class="main-breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item" style="font-family: cursive;"><a href="halaman_setelah_login.php">Home</a></li>
					<li class="breadcrumb-item active" style="font-family: cursive;">Edit Profile</li>
				</ol>
			</nav>
			<!-- end breadcrumb -->

			<!-- buat class container -->

			<div class="container h-100">
				<div class="row h-100 justify-content-center align-items-center">
					<div class="col-md-4 mb-3">
						<div class="card">
							<div class="card-body">
								<div class="d-flex flex-column align-items-center text-center">
									<img src="<?php echo $foto; ?>" class="rectangle" width="320" height="350" id="imgUser">
									<div class="mt-3">
										<h4 style="font-family: cursive;">Foto Profile</h4>
										<a href="<?php echo $foto; ?>" style="font-family: cursive;">Download Foto Profile</a>
										<form action="config/upload.php" method="POST" enctype="multipart/form-data">
											<input type="hidden" name="id_pendaftar" value="<?php echo $id_register ?>">
											<input type="hidden" class="form-control" name="foto" id="foto" style="font-family: cursive;">
											<div class="custom-file">
												<input type="file" id="customFile" class="custom-file-input" name="UploadedFile" accept="image/jpeg" value="">
												<label class="custom-file-label" for="customFile">Change</label>
												<h6>File dengan format .JPG atau .PNG dengan ukuran maksimal 500kb</h6>
											</div>
											<hr>
											<button type="submit" class="btn btn-info" style="font-family: cursive;" id="update">Update Foto</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- membuat form -->
			<div class="row">
				<form action="config/edit.php" method="POST" class="col-lg-6">
					<h2 style="font-family: cursive;">Edit Profile</h2>
					<!-- buat row form (baris ke 1 pada form) -->
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="contoh1" style="font-family: cursive;">Nama Depan</label>
							<input type="text" class="form-control" id="namadepan" name="namadepan" style="font-family: cursive;" value=<?php echo $nama_depan ?>>
						</div>
						<div class="form-group col-md-6">
							<label for="contoh2" style="font-family: cursive;">Nama Belakang</label>
							<input type="text" class="form-control" id="namabelakang" name="namabelakang" style="font-family: cursive;" value=<?php echo $nama_belakang ?>>
						</div>
					</div>
					<!-- end baris 1 pada form -->

					<!-- baris ke 2 pada form -->
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="contoh1" style="font-family: cursive;">Email</label>
							<input type="text" class="form-control" id="email" name="email" style="font-family: cursive;" value=<?php echo $email ?>>
						</div>
						<div class="form-group col-md-6">
							<label for="contoh2" style="font-family: cursive;">Username</label>
							<input type="text" class="form-control" name="username" style="font-family: cursive;" value=<?php echo $username ?> readonly>
						</div>
						<!-- end baris 2 pada form -->

						<!-- baris ke 3 pada form -->
						<div class="form-group col-md-6">
							<label for="contoh2" style="font-family: cursive;">Telepon</label>
							<input type="text" class="form-control" id="telp" name="telp" style="font-family: cursive;" value=<?php echo $telp ?>>
						</div>
						<!-- end baris 3 pada form -->

						<!-- baris ke 4 pada form -->
						<div class="form-group col-md-12">
							<label for="contoh3" style="font-family: cursive;">Alamat Pengiriman</label>
							<input type="text" class="form-control" id="alamat" name="alamat" style="font-family: cursive;" value="<?php echo $alamat; ?>" />
						</div>
						<!-- end baris 4 pada form -->
					</div>
					<input type="hidden" name="id_reg" value="<?php echo $id_register; ?>" />
					<button type="submit" class="btn btn-primary" id="btnSave" style="font-family: cursive;">Simpan</button>
					<hr>
					<!-- end baris 2 pada form -->

				</form>
				<form action="config/updatepass.php" method="POST" class="col-lg-6">
					<h2 style="font-family: cursive;">Edit Password</h2>

					<div class="form-row">
						<div class="form-group col-md-12">
							<label for="contoh4" style="font-family: cursive;">Password</label>
							<input type="password" class="form-control" name="password" id="password1" style="font-family: cursive;">
						</div>
						<div class="form-group col-md-12">
							<label for="contoh4" style="font-family: cursive;">Konfirmasi Password</label>
							<input type="password" class="form-control" name="password2" id="password2" style="font-family: cursive;">
						</div>
					</div>
					<input type="hidden" name="id_pendaftar" value="<?php echo $id_register; ?>" />
					<button type="submit" id="btnSubmitPass" class="btn btn-primary float-right" style="font-family: cursive;">Simpan</button>
					<!-- end baris 2 pada form -->

				</form>
			</div>

			<!-- end form -->


			<div class="row" style="margin-right: 1px;">
				<div class="col-md-12" style="background-color: gray;">
					<h6><b> &emsp; @Copyright by 18111071_IvanFavian_TIFRP18CIDB_UASWEB1
						</b></h6>
				</div>
			</div>
		</div>
	</div>
	<!-- end container -->
	<script type="text/javascript">
		$(document).ready(function() {
			$(".custom-file-input").on("change", function() {
				var fileName = $(this).val().split("\\").pop();
				$(this).siblings(".custom-file-label").addClass("selected").html(fileName);
			});

			$('#customFile').on('change', function() {
				readURL(this);
			});

			$('#update').click(function() {
				var base64String = $('#imgUser').attr('src');

				$('#foto').val(base64String);
			});

			$("#btnSubmitPass").click(function() {
				var pass1 = $('#password1').val();
				var pass2 = $('#password2').val();

				if (pass1 == "") {
					alert("Password tidak boleh kosong");
					return false;
				} else if (pass2 == "") {
					alert("Password tidak boleh kosong");
					return false;
				} else if (pass1 != pass2) {
					alert("Konfirmasi password tidak sesuai");
					return false;
				}

			})

			$("#btnSave").click(function() {
				if ($("#namabelakang").val() == "") {
					alert("Nama belakang tidak boleh kosong");
					return false;
				} else if ($("#namadepan").val() == "") {
					alert("Nama depan tidak boleh kosong");
					return false;
				} else if ($("#email").val() == "") {
					alert("Email tidak boleh kosong");
					return false;
				} else if ($("#telp").val() == "") {
					alert("Telepon tidak boleh kosong");
					return false;
				} else if ($("#alamat").val() == "") {
					alert("Alamat tidak boleh kosong");
					return false;
				}
			})



		})

		function readURL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();

				reader.onload = function(e) {
					$('#imgUser').attr('src', e.target.result);
				}

				var base64file = reader.readAsDataURL(input.files[0]);

				return base64file;

			}
		}
	</script>
</body>

</html>