<?php
session_start();
if(isset($_SESSION['login'])) {
?>
<!DOCTYPE html>
<html>
	<head>

	</head>
	<body>
            <?php
			include 'koneksi.php';
			$id = $_GET['ID'];
			$sql = mysqli_query($connect, "SELECT * FROM data_warga WHERE id = '$id'");
			$row = mysqli_fetch_array($sql);
			?>
		<h1>Edit Data</h1>
		<h3><a href="beranda.php">Kembali</a></h3>
		<table>
		<form action="proses_edit.php" method="post">
			<tr>
            <input type="hidden" name="id" value="<?= $id ?>">
			<td>NIK: </td><td><input type="text" name="nik" placeholder="harus 4 angka" value="<?= $row['nik']; ?>"></td>
			</tr><tr>
			<td>No KK: </td><td><input type="text" name="no_kk" placeholder="harus 4 angka" value="<?= $row['no_kk']; ?>"></td>
			</tr><tr>
			<td>Nama: </td><td><input type="text" name="nama" placeholder="nama" value="<?= $row['nama']; ?>"></td>
			</tr><tr>
			<td>Tgl. Lahir: </td><td><input type="text" name="tanggal_lahir" placeholder="2018-12-20" value="<?= $row['tanggal_lahir']; ?>"></td>
			</tr><tr>
			<td>Jenis: </td><td>
                      <label>
                        <input type="radio" value="l" name="jenis" <?= ($row['jenis_kelamin'] == 'L' ) ?  'checked' : ''?>>
                        Laki - Laki
                      </label>
                      <label>
                        <input type="radio" name="jenis" value="p" <?= ($row['jenis_kelamin'] == 'P' ) ?  'checked' : ''?>>
                        Perempuan
                      </label></td>
			</tr><tr>
			<td>Agama: </td><td><input type="text" name="agama" placeholder="agama" value="<?= $row['agama']; ?>"></td>
			</tr><tr>
			<td></td><td><button type="submit">Edits</button></td>
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