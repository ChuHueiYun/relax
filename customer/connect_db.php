<?php
	$servername = "localhost";
	$db_username = "root";
	$db_password = "00357053";
	$databasename = "relax";
	$connect = new mysqli($servername, $db_username, $db_password, $databasename);
	if($connect->connect_error) die("Connection failed: " . $connect->connect_error);
	mysqli_set_charset($connect,"utf8");	//設定編碼
?>