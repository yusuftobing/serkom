<?php
session_start();
include 'koneksi.php';

if (isset($_POST['login'])) {

	// cek akun ada apa tidak
	$cek = mysqli_query($conn, "SELECT * FROM tb_admin
			WHERE username = '" . htmlspecialchars($_POST['user']) . "' AND password = '" . MD5(htmlspecialchars($_POST['pass'])) . "' ");

	if (mysqli_num_rows($cek) > 0) {
		$a = mysqli_fetch_object($cek);

		$_SESSION['stat_login'] = true;
		$_SESSION['id'] = $a->id_admin;
		$_SESSION['nama'] = $a->nm_admin;
		echo '<script>window.location="beranda.php"</script>';
	} else {
		echo '<script>alert("Gagal, username atau password salah")</script>';
	}
}
?>
<!DOCTYPE html>
<html>

<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>PSB Online</title>
     <link rel="stylesheet" type="text/css" href="css/style.css">
     <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
     <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
</head>

<body>

     <!-- bagian main login -->
     <div class="container ">
          <div class="row py-5  shadow p-1 mt-4  fs-5" style="border-radius:40px;   background: linear-gradient(
    to right,
    #ffff 0%,
    #ffff 50%,
    #9dc0f3 50%,
    #9dc0f3 100%
  );">
               <div class="col-md-6">
                    <img src="img/regis.png" alt="" width="100%">
               </div>

               <div class="col-md-6 d-flex align-items-center justify-content-center" style="border-radius:40px; ">
                    <form action="" method="post" class="py-2">
                         <h2 class="text-center py-3 fw-bold ">Halaman <span class="text-white">Login</span> </h2>
                         <div class="row ">
                              <div class="col-md-12 mb-3">
                                   <label class="form-label">Username</label>
                                   <input type="text" class="form-control" name="user">
                              </div>
                              <div class="col-md-12">
                                   <div class="col-md-12 mb-3">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control" name="pass">
                                   </div>
                              </div>
                         </div>
                         <input type="submit" name="login" value="Login" class="btn btn-primary">
                         <a href="landingpage/index.php" class="btn btn-danger">Home</a>
                    </form>
               </div>
          </div>










</body>

</html>