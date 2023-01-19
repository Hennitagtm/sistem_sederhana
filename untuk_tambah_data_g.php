<?php
$pengguna=$_POST["nama_anda"];
$password=$_POST["katasandi_anda"];
include "konek_g.php";
$kueri=mysqli_query($konek,"INSERT INTO tabel_login (pengguna,password) VALUES ('$pengguna','$password')");
if($kueri){
	// ini nanti di redirect ke halaman utama
	header("location:lihat_pengguna_g.php");
}else{
		// ini nanti di redirect ke halaman login
	header("location:tambah_biodata.php");	
}