<?php
	$host="localhost";
	$user="root";
	$password="";
	$database="warkop2";

	mysql_connect($host,$user,$password) or die ("Gagal Terhubung Ke Database");
	mysql_select_db($database) or die ("Database Tidak Ditemukan");
?>