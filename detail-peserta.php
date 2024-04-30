<?php
session_start();
include 'koneksi.php';
if ($_SESSION['stat_login'] != true) {
	echo '<script>window.location="login.php"</script>';
}

$peserta = mysqli_query($conn, "SELECT * FROM tb_pendaftaran WHERE id_pendaftaran = '" . $_GET['id'] . "' ");
$p = mysqli_fetch_object($peserta);
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

     <link rel="icon" href="landingpage/imglogo/logobuku.png">
</head>

<body>

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
     <section class="content">
          <h2>Detail Peserta</h2>
          <div class="box">

               <table class="table-data" border="0">
                    <tr>
                         <td>Kode Pendaftaran</td>
                         <td>:</td>
                         <td><?php echo $p->id_pendaftaran ?></td>
                    </tr>
                    <tr>
                         <td>Tahun Ajaran</td>
                         <td>:</td>
                         <td><?php echo $p->th_ajaran ?></td>
                    </tr>
                    <tr>
                         <td>Jurusan</td>
                         <td>:</td>
                         <td><?php echo $p->jurusan ?></td>
                    </tr>
                    <tr>
                         <td>Nama Lengkap</td>
                         <td>:</td>
                         <td><?php echo $p->nm_peserta ?></td>
                    </tr>
                    <tr>
                         <td>Tempat, Tanggal Lahir</td>
                         <td>:</td>
                         <td><?php echo $p->tmp_lahir . ', ' . $p->tgl_lahir ?></td>
                    </tr>
                    <tr>
                         <td>Jenis Kelamin</td>
                         <td>:</td>
                         <td><?php echo $p->jk ?></td>
                    </tr>
                    <tr>
                         <td>Agama</td>
                         <td>:</td>
                         <td><?php echo $p->agama ?></td>
                    </tr>
                    <tr>
                         <td>Alamat</td>
                         <td>:</td>
                         <td><?php echo $p->almt_peserta ?></td>
                    </tr>
               </table>

          </div>

          <a href="edit-data.php?id=<?= $p->id_pendaftaran ?>" class="btn btn-primary px-3">Edit</a>

     </section>


     <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>