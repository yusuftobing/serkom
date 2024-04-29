<?php
session_start();
session_destroy();

echo "<script> alert('berhasil logout') 
     location.href='../index.php';  
     </script>";

?>