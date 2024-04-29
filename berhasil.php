<?php
include 'koneksi.php';
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
	<section class="box-formulir">
		<div class="container">
			<div class="row justify-content-center align-content-center" style="height:100vh;" >
				<div class="col-6 ">
					<h2 class="fw-bold">Pendaftaran <span class="text-primary">Berhasil</span> </h2>
					<div class="box bg-primary py-3 text-white rounded">
						<h4 class="ms-2">Kode pendaftaran Anda adalah <?php echo $_GET['id'] ?></h4>
						<a href="cetak-bukti.php?id=<?php echo $_GET['id'] ?>" target="_blank"
							class="btn btn-light ms-2">Cetak Bukti
							Daftar</a>
					</div>
				</div>
			</div>
		</div>




	</section>

</body>

</html>