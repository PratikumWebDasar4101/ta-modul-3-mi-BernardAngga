<?php 
session_start();
if (isset($_SESSION["username"])) {
?>
<!DOCTYPE html>
<html>
<head>
	<title>Upload</title>
</head>
<body>
	<form action="upload.php" method="POST" enctype="multipart/form-data">
		<p align="center">Selamat datang , <?php echo $_SESSION["username"]; ?> | <a href='Keluar.php'><b>Keluar</b></a></p>
		<center><b>Form Upload</b></center>
		<table align="center" width="400px" style="margin-top: 2%">
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="Nama"></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="Nim"></td>
			</tr>
			<tr>
				<td>Fakultas</td>
				<td>:</td>
				<td>
					<select name="fakultas" id="Fakultas">
						<option value="Manajemen Informatika"><b>Manajemen Informatika</b></option>
						<option value="Komputerisasi Akuntansi"><b>Komputerisasi Akuntansi</b></option>
						<option value="Teknik Komputer"><b>Teknik Komputer</b></option>
						<option value="Teknik Informatika"><b>Teknik Informatika</b></option>
						<option value="Sistem Multimedia"><b>Sistem Multimedia</b></option>
						<option value="Perhotelan"><b>Perhotelan</b></option>
						<option value="Manajemen Pemasaran"><b>Manajemen Pemasaran</b></option>
						<option value="Teknik Telekomunikasi"><b>Teknik Telekomunikasi</b></option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><input type="radio" value="Laki-laki" name="JK"><b>Laki-laki</b> <input type="radio" value="Perempuan" name="JK"><b>Perempuan</b></td>
			</tr>
			<tr>
				<td>File Gambar</td>
				<td>:</td>
				<td><input type="file" name="file_gbr" id="file_gbr"></td>
			</tr>
			<tr>
				<td colspan="3"><input type="submit" value="Kirim"></td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php 
}else {
	header("Location: Masuk.php");
}
?>
