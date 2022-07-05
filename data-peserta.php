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
		<h2>Data Peserta</h2>
		<div class="box">
				<table class="table" border="1">
					<thead>
						<a href="form_pendaftaran.php"><input type="submit" value="Tambah Data" class="btn-daftar"></a>
							<tr>
								<th>No</th>
								<th>ID Pendaftaran</th>
								<th>Nama</th>
								<th>Jenis Kelamin</th>
								<th>Jurusan</th>
								<th>Agama</th>
								<th>Alamat</th>
								<th>Action</th>
							</tr>
					</thead>
					<tbody>
						<?php
						$no = 1;
						$list_peserta = mysqli_query($connection, "SELECT * FROM tbl_pendaftaran");
						while ($row = mysqli_fetch_array($list_peserta)) {
							# code...
						?>
						<tr>
							<td><?php echo $no++ ?></td>
							<td><?php echo $row['id_pendaftaran'] ?></td>
							<td><?php echo $row['nama_pendaftar'] ?></td>
							<td><?php echo $row['jk'] ?></td>
							<td><?php echo $row['jurusan'] ?></td>
							<td><?php echo $row['agama'] ?></td>
							<td><?php echo $row['alamat'] ?></td>
							<td>
								<a href="update.php?id=<?php echo $row['id_pendaftaran'] ?>"
								i class="fa fa-edit" style="font-size:24px; color: #CB6610""></i>	&emsp;	</a>
								<a href="detail-peserta.php?id=<?php echo $row['id_pendaftaran'] ?>"
								i class="fa fa-info-circle" style="font-size:24px; color: #CB6610""></i>	&emsp;	</a>
								<a href = "delete-peserta.php?id=<?php echo $row['id_pendaftaran'] ?>" 
								onclick="return confirm('Anda ingin Menghapus Data ?')"
								i class="fa fa-trash-o" style="font-size:25px; color: #B60C0C"></a>
							</td>
						</tr>
					<?php } ?>
					</tbody>
				</table>

			</div>
		</div>
	</section>	
	</body>
</html>