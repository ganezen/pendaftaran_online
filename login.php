<?php
session_start();
	include 'koneksi.php';

	if(isset($_POST['login'])){

		//CEK USER APAKAH ADA ATAU TIDAK
		$cek = mysqli_query($connection, "SELECT * FROM tb_admin WHERE 
			username ='".htmlspecialchars($_POST['user'])."' AND password =  '".MD5(htmlspecialchars($_POST['pass']))."'");
		if(mysqli_num_rows($cek) >0){
			$adminA = mysqli_fetch_object($cek);

			$_SESSION ['stat_login'] = true;
			$_SESSION ['id_admin'] = $adminA->id_admin;
			$_SESSION ['nama'] = $adminA->nm_admin;
			echo '<script>window.location="home.php"</script>';
		}else{
			echo '<script>alert("Username atau Password Salah")</script>';
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Online | Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link href="https://fonts.googleapis.com/css2?family=Gentium+Book+Plus&display=swap" rel="stylesheet">
</head>
<body>
		
		<!-- MAIN LOGIN -->
		<section class="main-login">
			<div class="box-login">
				<h2>Login Admin</h2>

				<!-- FORM LOGIN DISINI -->
				<form action="" method="post">
					<div class="box">
						<table>
							<tr>
								<td>Username</td>
								<td>:</td>
								<td>
									<input type="text" name="user" class="input-control">
								</td>
							</tr>
							<tr>
								<td>Password</td>
								<td>:</td>
								<td>
									<input type="password" name="pass" class="input-control">
								</td>
							</tr>
							<td></td>
								<td></td>
								<td>
									<input type="submit" name="login" value="Login" class="btn-login">
								</td>
							</tr>
						</table>
					</div>
				</form>
			</div>
		</section>		
</body>
</html>