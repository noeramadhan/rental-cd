<?php
	include("cek_sesi.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>admin</title>
		<link rel="icon" type="image/png" href="images/logo.png">
		<link rel="stylesheet" type="text/css" href="../assets/style2.css">
	</head>
		<body>
			<aside>
				<a href="proses/logout.php">
					<img src="images/logout.png">
					<h5>Logout</h5>	
				</a>
			</aside>
				<header>
					<h1>UNIsi Express</h1>
					<h5>Train Information System</h5>
				</header>
						<nav>
							<ul>
								<li><a href="ubahdata.php">Ubah Data</a></li>
								<li><a href="lihatdata.php">Lihat Data</a></li>
							</ul>
						</nav>
				<div>
					<h2 id="font">Selamat Datang Admin!</h2>
					<article id="font3">
						<h3>Petunjuk Penggunaan :</h3>
						<h4>1. Menu Ubah Data</h4>
						<p>Menu ini menyediakan fitur penambahan data berupa jadwal keberangkatan Kereta Api.</p>
						<h4>2. Menu Lihat Data</h4>
						<p>Pada menu ini, daftar data penjadwalan Kereta Api ditampilkan dan memiliki fitur pengubahan dan penghapusan data.</p>
					</article>
					
				</div>
					<footer>
					
					</footer>

		</body>
</html>
