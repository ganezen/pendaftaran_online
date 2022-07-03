<?php
	include 'koneksi.php';
	if(isset($_POST['submit'])){

		// Mengambil ID Terbesar di kolom id_pendaftaran dan mengambil 5 karakter di belakangnya
		$getMaxId = mysqli_query($connection, "SELECT MAX(RIGHT(id_pendaftaran, 5)) AS id FROM tbl_pendaftaran");

		$d = mysqli_fetch_object($getMaxId);
		$generatedId = 'P'.date('Y').sprintf("%05s", $d->id + 1);
		//Prose insert
		$insert = mysqli_query($connection, "INSERT INTO tbl_pendaftaran VALUES(
				'".$generatedId."',			
				'".$_POST['nama_pendaftar']."',
				'".$_POST['tp_lahir']."',
				'".date('Y-m-d')."',
				'".$_POST['jk']."',
				'".$_POST['nik']."',
				'".$_POST['th_ajaran']."',
				'".$_POST['jurusan']."',
				'".$_POST['agama']."',
				'".$_POST['alamat']."',
				'".$_POST['nama_wali']."',
				'".$_POST['no_telepon']."'
		)");
		if ($insert){
			echo '<script>window.location="sukses.php?id='.$generatedId.'"</script>';
		} else{
			echo 'Data ada yang salah ' .mysqli_error($connection);
		}

	}
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

	<!-- Box Formulir -->
	<section class="box-formulir">

		<h2>Formulir Pendaftaran Siswa Baru SMK 3</h2>

		<!-- bagian form -->
		<form action="" method="post">
			
			<div class="box">
				<table border="0" class="table-form">
					<tr>
						<td>Tahun Ajaran</td>
						<td>:</td>
						<td>
							<input type="text" name="th_ajaran" class="input-control" value="2022/2023" readonly>
						</td>
					</tr>
					<tr>
						<td>Jurusan</td>
						<td>:</td>
						<td>
							<select class="input-control" name="jurusan">
								<option value"">---Choose---</option>
								<option value"Teknik Informatika">Rekayasa Perangkat Lunak</option>
								<option value"Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
								<option value"Multimedia">Multimedia</option>
								<option value"Farmasi">Farmasi</option>
								<option value"Teknik Kendaraan Ringan">Teknik Kendaraan Ringan</option>
							</select>
						</td>
					</tr>
				</table>
			</div>

			<h3>Data Diri Calon Siswa</h3>
			<div class="box">
				<table border="0" class="table-form">
					<tr>
						<td>Nama Lengkap</td>
						<td>:</td>
						<td>
							<input type="text" name="nama_pendaftar" class="input-control">
						</td>
					</tr>
					<tr>
						<td>Tempat Lahir</td>
						<td>:</td>
						<td>
							<input type="text" name="tp_lahir" class="input-control">
						</td>
					</tr>
					<tr>
						<td>Tanggal Lahir</td>
						<td>:</td>
						<td>
							<input type="date" name="tgl_lahir" class="input-control">
						</td>
					</tr>
					<tr>
						<td>Jenis Kelamin</td>
						<td>:</td>
						<td>
							<input type="radio" name="jk" class="input-control" value="Laki-laki"> Laki-laki &nbsp;&nbsp;&nbsp;
							<input type="radio" name="jk" class="input-control" value="Perempuan"> Perempuan
						</td>
					</tr>
					<td>NIK</td>
						<td>:</td>
						<td>
							<input type="text" name="nik" class="input-control">
						</td>
					<tr>
						<td>Tahun Ajaran</td>
						<td>:</td>
						<td>
							<input type="text" name="th_ajaran" class="input-control">
						</td>
					<tr>
						<td>Agama</td>
						<td>:</td>
						<td>
							<select class="input-control" name="agama">
								<option value"">---Choose---</option>
								<option value"Islam">Islam</option>
								<option value"Kristen">Kristen</option>
								<option value"Hindu">Hindu</option>
								<option value"Budha">Budha</option>
								<option value"Katolik">Katolik</option>
								<option value"Khonghucu">Khonghucu</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Alamat Tinggal</td>
						<td>:</td>
						<td>
							<textarea class="input-control" name="alamat"></textarea>
						</td>
					</tr>
					<tr>
						<td>Nama Wali</td>
						<td>:</td>
						<td>
							<input type="text" name="nama_wali" class="input-control">
						</td>
					</tr>
					<tr>
						<td>Nomor Telepon</td>
						<td>:</td>
						<td>
							<input type="text" name="no_telepon" class="input-control">
						</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>
							<input type="submit" name="submit" value="Daftar" class="btn-daftar">
						</td>
					</tr>
				</table>
			</div>


		</form>

</section>
</body>
</html>