<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "ta3";

$conn = mysql_connect($servername, $username, $password);
$db_select = mysql_select_db($db, $conn);

if (!$conn)
    die("Connection failed: " . mysql_error());
if (!$db_select)
    die("Selected failed: " . mysql_error());
?> 