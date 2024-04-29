<?php
session_start();
require '../koneksi.php';

if (isset($_POST['update'])) {
     $id = $_POST['id'];
     $jurusan = $_POST['jurusan'];
     $nm = $_POST['nm'];
     $tmp_lahir = $_POST['tmp_lahir'];
     $tgl_lahir = $_POST['tgl_lahir'];
     $jk = $_POST['jk'];
     $agama = $_POST['agama'];
     $alamat = $_POST['alamat'];

     $query = "UPDATE tb_pendaftaran SET
     jurusan='$jurusan', 
     nm_peserta='$nm',
      tmp_lahir='$tmp_lahir',
       tgl_lahir='$tgl_lahir', 
       jk='$jk', agama='$agama', 
       almt_peserta='$alamat'
        WHERE id_pendaftaran = '$id'";
     $query_run = mysqli_query($conn, $query);
     if ($query_run) {
          echo '<script>alert("Data Berhasilah Di Update")</script>';
          echo '<script>window.location="../data-peserta.php"</script>';
     } else {
          echo '<script>alert("Data Tidak Berubah")</script>';
          echo '<script>window.location="../edit-data.php"</script>';
     }

}