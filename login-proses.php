<?php 
session_start();

$username = $_POST["username"];
$password = $_POST["password"];

if ($username == "Admin" && $password == "000") {
	$_SESSION["username"] = $username;
	header("Location: form.php");
}else {
	echo "Tidak bisa Login";
}
?>