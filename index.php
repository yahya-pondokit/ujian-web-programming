<?php
	session_start();
	if(isset($_SESSION['login'])) {
  		header("location:beranda.php");
  	} else {
?>
<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<form action="proses_login.php"  method="post">
			Nama: <input type="text" name="username" placeholder="nama" /><br />
			Pass: <input type="password" name="password" placeholder="password" />
			<button type="submit">Login</button>
		</form>
	</body>
</html>
<?php
  	}
?>