<?php 
	session_start();
	include 'koneksi.php';

	$update =mysqli_query($connection, "SELECT * FROM tbl_pendaftaran WHERE id_pendaftaran = '".$_GET['id']."' ");
	$u = mysqli_fetch_assoc($update);

	if(isset($_POST['submit'])){
			// proses insert data baru
			$updateData = mysqli_query($connection, "UPDATE tbl_pendaftaran SET		
					nama_pendaftar = '".$_POST['nama_pendaftar']."',
					tp_lahir = '".$_POST['tp_lahir']."',
					tgl_lahir = '".$_POST['tgl_lahir']."',
					jk = '".$_POST['jk']."',
					nik = '".$_POST['nik']."',
					th_ajaran = '".$_POST['th_ajaran']."',
					jurusan = '".$_POST['jurusan']."',
					agama = '".$_POST['agama']."',
					alamat = '".$_POST['alamat']."',
					nama_wali = '".$_POST['nama_wali']."',
					no_telepon = '".$_POST['no_telepon']."'
				WHERE id_pendaftaran = '".$_GET['id']."' ");

				//jika berhasil update
				if($updateData){
					echo '<script>window.location="data-peserta.php?id='.$generateId.'"</script>';
				}else{
					echo 'Error '.mysqli_error($connection);
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

		<h2>Update Pendaftaran Siswa Baru SMK 3</h2>

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
								<option value"<?php echo $u['jurusan'] ?>"><?php echo $u['jurusan'] ?></option>
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

			<h3>Update Data Diri Calon Siswa</h3>
			<div class="box">
				<table border="0" class="table-form">
					<tr>
						<td>Nama Lengkap</td>
						<td>:</td>
						<td>
							<input type="text" name="nama_pendaftar" class="input-control" value="<?php echo $u['nama_pendaftar']?>">
						</td>
					</tr>
					<tr>
						<td>Tempat Lahir</td>
						<td>:</td>
						<td>
							<input type="text" name="tp_lahir" class="input-control" value="<?php echo $u['tp_lahir']?>">
						</td>
					</tr>
					<tr>
						<td>Tanggal Lahir</td>
						<td>:</td>
						<td>
							<input type="date" name="tgl_lahir" class="input-control" value="<?php echo $u['tgl_lahir']?>">
						</td>
					</tr>
					<tr>
						<td>Jenis Kelamin</td>
						<td>:</td>
						<td>
							<input type="radio" name="jk" class="input-control" <?php if($u['jk']=="Laki-laki") echo "checked";?> value="Laki-laki"> Laki-laki &nbsp;&nbsp;&nbsp;
							<input type="radio" name="jk" class="input-control" <?php if($u['jk']=="Perempuan") echo "checked";?> value="Perempuan"> Perempuan
						</td>
					</tr>
					<td>NIK</td>
						<td>:</td>
						<td>
							<input type="text" name="nik" class="input-control" value="<?php echo $u['nik']?>">
						</td>
					<tr>
						<td>Tahun Ajaran</td>
						<td>:</td>
						<td>
							<input type="text" name="th_ajaran" class="input-control" value="<?php echo $u['th_ajaran']?>">
						</td>
					<tr>
						<td>Agama</td>
						<td>:</td>
						<td>
							<select class="input-control" name="agama">
								<option value="<?php echo $u['agama'] ?>"><?php echo $u['agama'] ?></option>
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
							<textarea class="input-control" name="alamat" value="<?php echo $u['alamat']?>"></textarea>
						</td>
					</tr>
					<tr>
						<td>Nama Wali</td>
						<td>:</td>
						<td>
							<input type="text" name="nama_wali" class="input-control" value="<?php echo $u['nama_wali']?>">
						</td>
					</tr>
					<tr>
						<td>Nomor Telepon</td>
						<td>:</td>
						<td>
							<input type="text" name="no_telepon" class="input-control" value="<?php echo $u['no_telepon']?>">
						</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>
							<input type="submit" name="submit" value="Update Data" class="btn-daftar">
						</td>
					</tr>
				</table>
			</div>
		</form>
	</section>
	</body>
</html>