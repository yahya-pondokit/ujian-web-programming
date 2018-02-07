<?php
	session_start();
	if (isset($_SESSION['login'])) {
		include 'koneksi.php';
		
		$id = isset($_GET['ID']) ? $_GET['ID'] : '';
		
		if (!empty($id)) {
			mysqli_query($connect, "
			DELETE FROM data_warga
			WHERE id = '$id'
			");
			
			header("location:beranda.php");
		} else {
			echo "ID kosong";
		}
	} else {
		echo "<a href='index.php'>Login</a>";
	}		
?>