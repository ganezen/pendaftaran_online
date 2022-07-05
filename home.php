<?php
	session_start();
	include 'koneksi.php';
	if($_SESSION['stat_login'] != true){
		echo '<script>window.location="login.php"</script>';
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Online | ADMIN</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link href="https://fonts.googleapis.com/css2?family=Gentium+Book+Plus&display=swap" rel="stylesheet">
</head>
<body>

	<!-- HEADER-->
	<header>
		<h1><a href="home.php">Admin Pendaftaran</h1>
		<ul>
			<li><a href="home.php">Home</a></li>
			<li><a href="data-peserta.php">Data Peserta</a></li>
			<li><a href="keluar.php">Logout</a></li>
		</ul>
	</header>
		
	<!-- ISI KONTEN-->
	<section class="content">
		<h2>Home</h2>
		<div class="box">
			<h3>Anda sedang login sebagai <?php echo $_SESSION['nama'] ?></h3>
		</div>
	</section>	
	</body>
</html>
