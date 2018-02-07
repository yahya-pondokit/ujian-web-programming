<?php
	session_start();
	if (isset($_SESSION['login'])) {
		include 'koneksi.php';
		$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
		$nik = isset($_POST['nik']) ? $_POST['nik'] : '';
		$kk = isset($_POST['no_kk']) ? $_POST['no_kk'] : '';
		$tanggal = isset($_POST['tanggal_lahir']) ? $_POST['tanggal_lahir'] : '';
		$jenis = isset($_POST['jenis']) ? $_POST['jenis'] : '';
		$agama = isset($_POST['agama']) ? $_POST['agama'] : '';
		if (!empty($nama) && !empty($nik) && !empty($kk) && !empty($tanggal) && !empty($jenis)) {
			mysqli_query($connect, "INSERT INTO data_warga VALUES (null,'$nama', '$kk', '$nik', '$jenis', '$tanggal', '$agama')");
			header("location:beranda.php");
		} else {
			echo "Lengkapi data: <a href='tambah.php'>Kembali</a>";
		}
	} else {
		echo "<a href='index.php'>Login</a>";
	}
?>