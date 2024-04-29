<?php
session_start();
include 'koneksi.php';
if ($_SESSION['stat_login'] != true) {
	echo '<script>window.location="login.php"</script>';
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PSB Online | Administrator</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
</head>

<body>

	<!-- bagian header -->
	<header>
		<nav class="navbar navbar-expand-lg   fixed-top">
			<div class="container">
				<a class="navbar-brand fs-2 fw-bold text-white" href="beranda.php">Admin <span
						class="text-primary">Sekolah</span> </a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
					aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav ms-auto ">
						<li class="nav-item ">
							<a class="nav-link active text-white"  aria-current="page" href="beranda.php">Beranda</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white" href="data-peserta.php">Data Peserta</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white" href="keluar.php">Keluar</a>
						</li>

					</ul>
				</div>
			</div>
		</nav>
	</header>


	<!-- bagian content -->
	<div class="hero d-flex align-items-center">
		<section class="container">
			<div class="row">
				<div class="col text-center text-white">
					<div class="py-5  text-center ">
						<h3>
							<span class="text-primary fw-bold "><?php echo $_SESSION['nama'] ?></span>, Selamat
							Datang di
							Admin Sekolah Online.
						</h3>
					</div>
				</div>
			</div>
		</section>
	</div>

	<script src="bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>