<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cetak Peserta</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
	<script>
		window.print();
	</script>
</head>

<body>
	<div class="row px-2 py-2" style="margin-top: 15px;">
		<div class="col-md-12">
			<h2 class="fw-bold py-3 text-center">Laporan Calon <a href="data-peserta.php" class="text-decoration-none"><span class="text-primary">Siswa</span></a></h2>
			<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover" width='100%' cellspacing='0'>
				<thead>
					<tr>
						<th style="color:red; text-align:center;">No</th>
						<th style=" text-align:center;">ID Pendaftaran</th>
						<th style=" text-align:center;">Tahun Ajaran</th>
						<th style=" text-align:center;">Jurusan</th>
						<th style=" text-align:center;">Nama</th>
						<th style=" text-align:center;">Tempat, Tanggal Lahir</th>
						<th style=" text-align:center;">Jenis Kelamin</th>
						<th style=" text-align:center;">Agama</th>
						<th style=" text-align:center;">Alamat</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					$list_peserta = mysqli_query($conn, "SELECT * FROM tb_pendaftaran");
					while ($row = mysqli_fetch_array($list_peserta)) {
						?>
						<tr>
							<td style=" text-align:center;"><?php echo $no++ ?></td>
							<td style=" text-align:center;"><?php echo $row['id_pendaftaran'] ?></td>
							<td style=" text-align:center;"><?php echo $row['th_ajaran'] ?></td>
							<td style=" text-align:center;"><?php echo $row['jurusan'] ?></td>
							<td style=" text-align:center;"><?php echo $row['nm_peserta'] ?></td>
							<td style=" text-align:center;"><?php echo $row['tmp_lahir'] . ', ' . $row['tgl_lahir'] ?></td>
							<td style=" text-align:center;"><?php echo $row['jk'] ?></td>
							<td style=" text-align:center;"><?php echo $row['agama'] ?></td>
							<td style=" text-align:center;"><?php echo $row['almt_peserta'] ?></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
			</div>
		</div>
	</div>


	<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>