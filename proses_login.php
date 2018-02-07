<?php
	include 'koneksi.php';
	$user = $_POST['username'];
	$password = $_POST['password'];

	if (!empty($user) && !empty($password)) {
		$sql = mysqli_query($connect, "SELECT * FROM user WHERE username = '$user' AND password = '$password'");
		$result = mysqli_num_rows($sql);

		if ($result){
			$row = mysqli_fetch_array($sql);
			session_start();
			$_SESSION['login'] = true;
			header("location:beranda.php");
		} else {
			echo "Password salah!";
		}
	} else {
		echo "Mohon diisi!";
	}
?>