<?php
	include "koneksi.php";
	
	session_start();
    include_once 'class.user.php';
    $user = new User();
    $uid = $_SESSION['uid'];

    $username = $user->get_username($uid);

	$nama=$_POST["nama_lokasi"];
	$alamat=$_POST["alamat"];
	$deskripsi=$_POST["deskripsi"];
	$lat=$_POST["latitude"];
	$longi=$_POST["longitude"];
	
	//insert ke dalam database
    
	$sql="INSERT into daftar_warkop (nama, alamat, deskripsi, lat, lng, username) values ('$nama', '$alamat', '$deskripsi','$lat', '$longi','$username')";
	$sqla=mysql_query($sql);
	
	if($sqla) {
		echo "data telah berhasil di submit";
		header("location:home.php");
	}
?>