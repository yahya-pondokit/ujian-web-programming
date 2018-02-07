<?php
session_start();
if(isset($_SESSION['login'])) {
?>
<!DOCTYPE html>
<html>
	<head>

	</head>
	<body>
		<h1>Tambah Data</h1>
		<h3><a href="beranda.php">Kembali</a></h3>
		<table>
		<form action="proses_tambah.php" method="post">
			<tr>
			<td>NIK: </td><td><input type="text" name="nik" placeholder="harus 4 angka"></td>
			</tr><tr>
			<td>No KK: </td><td><input type="text" name="no_kk" placeholder="harus 4 angka"></td>
			</tr><tr>
			<td>Nama: </td><td><input type="text" name="nama" placeholder="nama"></td>
			</tr><tr>
			<td>Tgl. Lahir: </td><td><input type="text" name="tanggal_lahir" placeholder="2018-12-20"></td>
			</tr><tr>
			<td>Jenis: </td><td>
                      <label>
                        <input type="radio" value="l" name="jenis"  checked>
                        Laki - Laki
                      </label>
                      <label>
                        <input type="radio" name="jenis" value="p">
                        Perempuan
                      </label></td>
			</tr><tr>
			<td>Agama: </td><td><input type="text" name="agama" placeholder="agama"></td>
			</tr><tr>
			<td></td><td><button type="submit">Tambah</button></td>
			</tr>
		</form>
		</table>
	</body>
</html>
<?php
} else {
	header("location:index.php");
}
?>