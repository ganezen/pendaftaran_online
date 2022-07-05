<?php
	include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Online</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link href="https://fonts.googleapis.com/css2?family=Gentium+Book+Plus&display=swap" rel="stylesheet">
</head>
<body>
		<section class="box-formulir">
				<h2>PENDAFTARAN ANDA BERHASIL</h2>
				<div class="box">
					<h4>KODE PENDAFTARAN ANDA ADALAH <?php echo $_GET['id'] ?></h4>
					<a href="cetak-bukti.php?id=<?php echo $_GET['id'] ?>" class="btn-cetak">CETAK BUKTI PENDAFTARAN</a>&emsp;
					<a href="index.php" class="btn-cetak">Home</a>
				</div>
		</section>
	</body>
</html>