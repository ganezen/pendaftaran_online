<?php
	session_start();
	include 'koneksi.php';
	if($_SESSION['stat_login'] != true){
		echo '<script>window.location="login.php"</script>';
	}

	$peserta =mysqli_query($connection, "SELECT * FROM tbl_pendaftaran WHERE id_pendaftaran = '".$_GET['id']."' ");
	//Object Penampung peserta
	$p = mysqli_fetch_object($peserta);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Online | ADMIN</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link href="https://fonts.googleapis.com/css2?family=Gentium+Book+Plus&display=swap" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"/>

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
		<h2>Detail Peserta</h2>
		<div class="box">
			<table class="table-data" >
				<tr>
					<td>KODE PENDAFTARAN</td>
					<td>:</td>
					<td><?php echo $p->id_pendaftaran ?></td>
				</tr>
				<tr>
					<td>Nama Lengkap</td>
					<td>:</td>
					<td><?php echo $p->nama_pendaftar ?></td>
				</tr>
				<tr>
					<td>Tempat, Tanggal Lahir</td>
					<td>:</td>
					<td><?php echo $p->tp_lahir.', '.$p->tgl_lahir ?></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td>:</td>
					<td><?php echo $p->jk ?></td>
				</tr>
				<tr>
					<td>NIK</td>
					<td>:</td>
					<td><?php echo $p->nik ?></td>
				</tr>
				<tr>
					<td>Tahun Ajaran</td>
					<td>:</td>
					<td><?php echo $p->th_ajaran ?></td>
				</tr>
				<tr>
					<td>Jurusan</td>
					<td>:</td>
					<td><?php echo $p->jurusan ?></td>
				</tr>
				<tr>
					<td>Agama</td>
					<td>:</td>
					<td><?php echo $p->agama ?></td>
				</tr>
				<tr>
					<td>Alamat </td>
					<td>:</td>
					<td><?php echo $p->alamat ?></td>
				</tr>
				<tr>
					<td>Nama Wali </td>
					<td>:</td>
					<td><?php echo $p->nama_wali ?></td>
				</tr>
				<tr>
					<td>Nomor Telepon </td>
					<td>:</td>
					<td><?php echo $p->no_telepon ?></td>
				</tr>
				
			</table>
		</div>

	</section>	
	</body>
</html>