<?php
	require "koneksi.php";
	$username = $_POST["username"];
	$nama = $_POST["nama"];
	$password = $_POST["password"];

	$sql = "INSERT INTO user VALUES('$username','$nama','$password')";
	$sqla = mysql_query($sql);

	if($sqla) {
		echo "Berhasil!!!";
	}
?>