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
     <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
     <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
     <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">

     <link rel="icon" href="landingpage/imglogo/logobuku.png">
</head>

<body>

     <!-- bagian header -->
     <!-- bagian header -->
     <header>
          <nav class="navbar navbar-expand-lg bg-body-tertiary">
               <div class="container">
                    <a class="navbar-brand fs-2 fw-bold" href="beranda.php">Admin <span
                              class="text-primary">Sekolah</span> </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                         aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                         <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                         <ul class="navbar-nav ms-auto ">
                              <li class="nav-item">
                                   <a class="nav-link active" aria-current="page" href="beranda.php">Beranda</a>
                              </li>
                              <li class="nav-item">
                                   <a class="nav-link" href="data-peserta.php">Data Peserta</a>
                              </li>
                              <li class="nav-item">
                                   <a class="nav-link" href="keluar.php">Keluar</a>
                              </li>

                         </ul>
                    </div>
               </div>
          </nav>
     </header>


     <!-- bagian content -->
     <div class="row px-2 py-2" style="margin-top: 15px;">
          <section class="col-md-12">
               <h2>Data Peserta</h2>
               <div class="table-responsive">
                    <a href="cetak-peserta.php" target="_blank" class="btn btn-primary mt-2 mb-2 px-3">Print</a>
                    <table class="table table-striped table-bordered table-hover" width='100%' cellspacing='0'>
                         <thead>
                              <tr>
                                   <th style="color:red; text-align:center;">No</th>
                                   <th style=" text-align:center;">ID Pendaftaran</th>
                                   <th style=" text-align:center;">Nama</th>
                                   <th style=" text-align:center;">Jenis Kelamin</th>
                                   <th style=" text-align:center;">Aksi</th>
                              </tr>
                         </thead>
                         <tbody>
                              <?php
						$no = 1;
						$list_peserta = mysqli_query($conn, "SELECT * FROM tb_pendaftaran");
						while ($row = mysqli_fetch_array($list_peserta)) {
							?>
                              <tr>
                                   <td>
                                        <center>
                                             <?php echo $no++ ?>
                                        </center>
                                   </td>
                                   <td>
                                        <center><?php echo $row['id_pendaftaran'] ?>
                                        </center>
                                   </td>
                                   <td>
                                        <center><?php echo $row['nm_peserta'] ?></center>
                                   </td>
                                   <td>
                                        <center><?php echo $row['jk'] ?></center>
                                   </td>
                                   <td>
                                        <center>
                                             <a class="btn btn-primary"
                                                  href="detail-peserta.php?id=<?php echo $row['id_pendaftaran'] ?>">Detail</a>
                                             <a class="btn btn-danger"
                                                  href="hapus-peserta.php?id=<?php echo $row['id_pendaftaran'] ?>"
                                                  onclick="return confirm('Yakin ?')">Hapus</a>
                                        </center>
                                   </td>
                              </tr>
                              <?php } ?>
                         </tbody>
                    </table>
               </div>
          </section>
     </div>


     <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>