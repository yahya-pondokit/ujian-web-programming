<?php
session_start();
if(isset($_SESSION['login'])) {
?>
<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<h1> Data Warga</h1>
		<h3><a href="tambah.php">Tambah Data</a></h3>
		<form action="" method="post"> 
		Search: <input type="text" name="cari" />
		<input type="submit" value="Submit" /> 
		</form> 
		<table>
			<tr>
				<th>No</th>
				<th>NIK</th>
				<th>No KK</th>
				<th>Nama</th>
				<th>Tgl. Lahir</th>
				<th>Jenis Kelamin</th>
				<th>Agama</th>
				<th>Aksi</th>
			</tr>
			<?php
			include 'koneksi.php';
			if (!empty($_POST['cari'])) {
				$cari = $_POST['cari'];
				$sql = mysqli_query($connect, "SELECT * FROM data_warga WHERE nama LIKE '%".$cari."%'");
				$no = 1;
				while($row = mysqli_fetch_array($sql)) {
					echo "
						<tr>
							<td>".$no++."</td>
							<td>".$row['nik']."</td>
							<td>".$row['no_kk']."</td>
							<td>".$row['nama']."</td>
							<td>".date("d F Y", strtotime($row['tanggal_lahir']))."</td>
							<td>".$row['jenis_kelamin']."</td>
							<td>".$row['agama']."</td>
							<td>
								<a href='edit.php?ID=$row[id]'> Edit 
								</a>
								-
								<a href='hapus.php?ID=$row[id]'> Hapus
								</a>
							</td>
						</tr>
					";
				}
			} else {
				$sql = mysqli_query($connect, "SELECT * FROM data_warga ORDER BY nama DESC");
				$no = 1;
				while($row = mysqli_fetch_array($sql)) {
					echo "
						<tr>
							<td>".$no++."</td>
							<td>".$row['nik']."</td>
							<td>".$row['no_kk']."</td>
							<td>".$row['nama']."</td>
							<td>".date("d F Y", strtotime($row['tanggal_lahir']))."</td>
							<td>".$row['jenis_kelamin']."</td>
							<td>".$row['agama']."</td>
							<td>
								<a href='edit.php?ID=$row[id]'> Edit 
								</a>
								-
								<a href='hapus.php?ID=$row[id]'> Hapus
								</a>
							</td>
						</tr>
					";
				}
			}
			?>
		</table>
		<h5><a href="logout.php">Logout</a></h5>
	</body>
</html>
<?php
} else {
	header("location:index.php");
}
?>