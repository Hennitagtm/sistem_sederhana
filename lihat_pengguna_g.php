<!DOCTYPE html>
<html>
<head>
	<title>Halaman beranda</title>
	<style type="text/css">
		ul {  
			list-style-type: none;  
		}
		a:link { text-decoration: none; }
	</style>
</head>
<body bgcolor="khaki">
	<center>
	<table  width="100%">
		<tr>
			
				<h1>SELAMAT DATANG DIHALAMAN INFORMASI</h1>
				<br><b><u>MENU SEBELAH KIRI</u></b><br>
		</tr>
		<tr>
			<td width="25%">
			<ul>
				<li>
					<a href="beranda_g.html">
						<b>Beranda</b>
					</a>
				</li>
				<li>
					<a href="lihat_pengguna_g.php">Lihat Pengguna</a>
				</li>
			</ul>
			</td>
			<td>
				<br>
				<center>
				<br><b><u>LIST PENGGUNA</u></b><br>
			<?php 
				include "konek_g.php";
				$kueri=mysqli_query($konek,'SELECT * FROM tabel_login');
				?>
				<table border="1">
					
					<tr>

						<td>
							<b>
							Nama Pengguna
						</b>
						</td>
						<td>
							<b>
							Sandi Pengguna
						</b>
						</td>
						<td>
							<b>
							Aksi
							</b>
						</td>
					</tr>

				<?php
				while($row = mysqli_fetch_array($kueri)){
					echo"<tr><td>";
					echo $row['pengguna'];
					echo"</td><td>";
					echo $row['password'];
					echo"</td>
					<td>";
					echo"
						<a href='hapus_g.php?delete=".$row['pengguna']."		'>hapus</a>
					";

				}
			?>
		</table>
			<br>
			<button><a  href="tambah_biodata.php">Tambah Pengguna</a></button>
			</td>
			</center>
		</tr>

	</table>
	</center>
</body>
</html>