<?php
$konek=mysqli_connect("localhost","root","","db_henni");
if($konek){
		// echo "berhasill";
	}else{
		echo '<script>window.alert("tidak terkoneksi")</script>'; 
	}