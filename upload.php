<?php 
session_start();
if (isset($_SESSION["username"])) {
	require("koneksi.php");

	$nama = $_POST["Nama"];
	$nim = $_POST["Nim"];
	$fakultas = $_POST["Fakultas"];
	$Jk = $_POST["JK"];

	$dir = "uploads/";
	$nama_file = $_FILES["file_gbr"]["name"];
	$nama_file_tmp = $_FILES["file_gbr"]["tmp_name"];
	$nama_file_temp = explode(".", $_FILES["file_gbr"]["name"]);
	$nama_file_baru = time() . '.' . end($nama_file_temp);
	$target_file = $dir . $nama_file_baru;

	$sql = "INSERT into users values('$nama','$nim','$fakultas','$Jk','$nama_file_baru');";

	if (mysql_query($sql) and move_uploaded_file($nama_file_tmp, $target_file)) {
		echo "Data kamu berhasil disimpan";
	}else {
		echo "Terjadi Kerusakan" . mysql_error();
	}
}else {
	header("Location: Masuk.php");
}
?>