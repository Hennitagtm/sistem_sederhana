<?php
$pengguna=$_POST["username"];
$password=$_POST["password"];
include "konek_g.php";
$kueri=mysqli_query($konek,'SELECT * FROM tabel_login WHERE pengguna="'.$pengguna.'" AND password="'.$password.'"');
if(mysqli_num_rows($kueri)>0){
	// ini nanti di redirect ke halaman utama
	header("location:beranda_g.html");
}else{
		// ini nanti di redirect ke halaman login
	header("location:login_g.html");	
}
