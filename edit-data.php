<?php

session_start();
require 'koneksi.php';

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
          <nav class="navbar navbar-expand-lg bg-body-tertiary">
               <div class="container">
                    <a class="navbar-brand fs-2 fw-bold" href="beranda.php">Admin <span
                              class="text-primary">Sekolah</span></a>

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

     <div class="container">
          <div class="row">
               <section class="col-md-12">
                    <?php

                    if (isset($_GET['id'])) {
                         $daftar = mysqli_real_escape_string($conn, $_GET['id']);
                         $quary = "SELECT * FROM tb_pendaftaran WHERE id_pendaftaran = '$daftar'";
                         $query_run = mysqli_query($conn, $quary);

                         if (mysqli_num_rows($query_run) > 0) {
                              $daftar = mysqli_fetch_array($query_run);
                              ?>
                    <form action="php/edit.php" method="POST">
                         <input type="hidden" name="id" value="<?= $daftar['id_pendaftaran']; ?>"" >
 
                         <div class=" form-group mb-3">
                         <label class="form-label">Jurusan</label>
                         <select name="jurusan" class="form-select">
                              <option <?= $daftar['jurusan']; ?>><?= $daftar['jurusan']; ?></option>
                              <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                              <option value="Teknik Komputer Dan Jaringan">Teknik Komputer Dan Jaringan
                              </option>
                              <option value="Desain Grafis">Desain Grafis</option>
                              <option value="Animasi">Animasi</option>
                         </select>
          </div>

          <div class="row">
               <div class="col-md-6">
                    <div class="form-group mb-3">
                         <label class="form-label">Nama Lengkap</label>
                         <input type="text" name="nm" value="<?= $daftar['nm_peserta']; ?>" class="form-control"
                              placeholder="cth : toni">
                    </div>
               </div>
               <div class="col-md-6">
                    <div class="form-group mb-3">
                         <label class="form-label">Tempat Lahir</label>
                         <input type="text" name="tmp_lahir" value="<?= $daftar['tmp_lahir']; ?>" class="form-control">
                         <!-- <small class="text-danger">Sesuai Kartu Keluarga</small> -->
                    </div>
               </div>
          </div>


          <div class="row">
               <div class="col-md-6">
                    <div class="form-group mb-3 ">
                         <label class="form-label">Tanggal Lahir</label>
                         <input type="date" name="tgl_lahir" class="form-control" value="<?= $daftar['tgl_lahir']; ?>">
                    </div>
               </div>

               <div class="col-md-6">
                    <div class="form-group mb-3">
                         <label class="form-label">Agama</label>
                         <select name="agama" class="form-select">
                              option
                              <option value="<?= $daftar['agama']; ?>"><?= $daftar['agama']; ?>
                              </option>
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
               <label class=" form-label"> Jenis Kelamin :</label>
               &nbsp;&nbsp;&nbsp;
               <input type="radio" name="jk" class="form-check-input" value="Laki-laki"
                    <?php if ($daftar['jk'] == 'Laki-laki') echo 'checked';?>>
               <label class="form-check-label" for="flexRadioDefault2">
                    Laki-laki
               </label>

               &nbsp;&nbsp;&nbsp;
               <input type="radio" name="jk" class="form-check-input" value="Perempuan"
                    <?php if ($daftar['jk'] == 'Perempuan') echo 'checked';?>>
               <label class="form-check-label" for="flexRadioDefault2">
                    Perempuan
               </label>
          </div>




          <div class="form-groub mb-3">
               <label class="form-label">ALamat Lengkap</label>
               <textarea name="alamat" class="form-control"><?= $daftar['almt_peserta']; ?></textarea>
               <!-- <small class="text-danger">Alamat Sesuai Kartu Keluarga </small> -->
          </div>

          <div class="container mt-3 mb-3">
               <input type="submit" name="update" class="btn btn-primary" value="Update">
          </div>

          </form>

          <?php
                         } else {
                              echo "Id Tidak ditemukan";
                         }
                    }
                    ?>

          </section>
     </div>
     </div>








     <!-- bagian content -->
     <!-- <section class="content">
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

     </section> -->


     <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>