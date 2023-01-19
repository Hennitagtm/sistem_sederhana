<?php 
$id=$_GET['delete'];
include "konek_g.php";
mysqli_query($konek,'DELETE FROM tabel_login WHERE pengguna="'.$id.'"');
header("location:lihat_pengguna_g.php");