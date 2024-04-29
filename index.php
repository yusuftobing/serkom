<?php
session_start();
include 'koneksi.php';
if (isset($_SESSION['status']) != 'login') {
	echo "<script> alert('Anda Belum Login') 
     location.href='landingpage/index.php';  
     </script>";
}

// 	echo '<script>alert("Anda Harus Login Terlebih Dahulu")</script>';
// 	echo '<script>window.location="landingpage/index.php"</script>';

// }
if (isset($_POST['submit'])) {

	// ambil 1 id terbesar di kolom id_pendaftaran, lalu ambil 5 karakter aja dari sebelah kanan
	$getMaxId = mysqli_query($conn, "SELECT MAX(RIGHT(id_pendaftaran, 5)) AS id FROM tb_pendaftaran");
	$d = mysqli_fetch_object($getMaxId);
	$generateId = 'P' . date('Y') . sprintf("%05s", $d->id + 1);

	// proses insert
	$insert = mysqli_query($conn, "INSERT INTO tb_pendaftaran VALUES (
				'" . $generateId . "',
				'" . date('Y-m-d') . "',
				'" . $_POST['th_ajaran'] . "',
				'" . $_POST['jurusan'] . "',
				'" . $_POST['nm'] . "',
				'" . $_POST['tmp_lahir'] . "',
				'" . $_POST['tgl_lahir'] . "',
				'" . $_POST['jk'] . "',
				'" . $_POST['agama'] . "',
				'" . $_POST['alamat'] . "'
			)");

	if ($insert) {
		echo '<script>window.location="berhasil.php?id=' . $generateId . '"</script>';
	} else {
		echo 'huft ' . mysqli_error($conn);
	}

}


?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PSB Online</title>
	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
</head>

<body>

	<!-- bagian box formulir -->
	<div class="container">
		<h2 class="alert alert-primary mb-4 mt-3 text-center">Formulir Pendaftaran Siswa Baru SMK</h2>

		<!-- bagian form -->
		<form action="" method="post">

			<!-- <div class="box"> -->
			<!-- <table border="0" class="table-form"> -->

			<div class="form-group mb-3 col">
				<label class="form-label ">Tahun Ajaran</label>
				<input type="text" name="th_ajaran" class="form-control" value="2024/2025" readonly>
			</div>

			<div class="form-group mb-3">
				<label class="form-label">Jurusan</label>
				<select name="jurusan" class="form-select">
					<option selected>--Pilih--</option>
					<option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
					<option value="Teknik Komputer Dan Jaringan">Teknik Komputer Dan Jaringan</option>
					<option value="Desain Grafis">Desain Grafis</option>
					<option value="Animasi">Animasi</option>
				</select>
			</div>





			<div class="container border border-black mb-5">
				<h3 class="text-center py-5">Data Diri Calon Siswa</h3>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group mb-3">
							<label class="form-label">Nama Lengkap</label>
							<input type="text" name="nm" class="form-control" placeholder="cth : toni">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group mb-3">
							<label class="form-label">Tempat Lahir</label>
							<input type="text" name="tmp_lahir" class="form-control">
							<small class="text-danger">Sesuai Kartu Keluarga</small>
						</div>
					</div>
				</div>


				<div class="row">
					<div class="col-md-6">
						<div class="form-group mb-3 ">
							<label class="form-label">Tanggal Lahir</label>
							<input type="date" name="tgl_lahir" class="form-control">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group mb-3">
							<label class="form-label">Agama</label>
							<select name="agama" class="form-select">
								<option selected>--Pilih--</option>
								<option value="Islam">Islam</option>
								<option value="Kristen">Kristen</option>
								<option value="Hindu">Hindu</option>
								<option value="Buddha">Buddha</option>
								<option value="Katolik">Katolik</option>
								<option value="Khonghucu">Khonghucu</option>
							</select>
						</div>

					</div>
				</div>



				<div class="form-group mb-4 mt-3 ">
					<label class="form-label"> Jenis Kelamin :</label>
					&nbsp;&nbsp;&nbsp;
					<input type="radio" name="jk" class="form-check-input" value="Laki-laki">
					<label class="form-check-label" for="flexRadioDefault2">
						Laki-laki
					</label>
					&nbsp;&nbsp;&nbsp;
					<input type="radio" name="jk" class="form-check-input" value="Perempuan">
					<label class="form-check-label" for="flexRadioDefault2">
						Perempuan
					</label>
				</div>




				<div class="form-groub mb-3">
					<label class="form-label">ALamat Lengkap</label>
					<textarea name="alamat" class="form-control"></textarea>
					<small class="text-danger">Alamat Sesuai Kartu Keluarga </small>
				</div>

				<div class="container mt-3 mb-3">
					<input type="submit" name="submit" class="btn btn-primary" value="Daftar Sekarang">
				</div>

			</div>



		</form>
	</div>





</body>

</html>