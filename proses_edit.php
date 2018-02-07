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
		$id = isset($_POST['id']) ? $_POST['id'] : '';
		if (!empty($nama) && !empty($nik) && !empty($kk) && !empty($tanggal) && !empty($jenis)) {
			mysqli_query($connect, "
				UPDATE data_warga 
				SET nama = '$nama', no_kk = '$kk', nik ='$nik', jenis_kelamin = '$jenis', tanggal_lahir = '$tanggal', agama = '$agama'
				WHERE id = '$id'");
			header("location:beranda.php");
		} else {
			echo "Lengkapi data: <a href='tambah.php'>Kembali</a>";
		}
	} else {
		echo "<a href='index.php'>Login</a>";
	}
?>