<?php
	
	//Koneksi ke Database
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'pendaftaran_online';

	$connection = mysqli_connect($host, $user, $pass, $db);

	if(!$connection){
		echo 'Error : ' .mysql_connect_error($connection);
	}

	?>