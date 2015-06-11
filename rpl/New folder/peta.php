<?php
	include "koneksi.php";
	$id = $_GET['id'];
	$result = mysql_query("SELECT * FROM daftar_warkop WHERE id = '$id'");
    while ($baris = mysql_fetch_array($result)) {
        $nama =  $baris['nama'];
        $alamat = $baris['alamat'];
        $lat = $baris['lat'];
        $longi = $baris['lng'];
    }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta name="viewport" content="width=device-width, intial-scale=1.0">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Simple markers</title>
    <style>
      	html, body, #map-canvas {
      		height: 300px;
	     	width: 500px;
        	margin: 50px;
        	padding: 0px
      	}
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script>
		function initialize() {
  			var myLatlng = new google.maps.LatLng(<?php echo"$lat";?>,<?php echo"$longi";?>);
  			var mapOptions = {
    			zoom: 15,
    			center: myLatlng
  			}
  			var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
 
  			var marker = new google.maps.Marker({
      			position: myLatlng,
      			map: map,
      			title: '<?php echo"$nama";?>'
  			});
 
 
 
			//marker baru
  			var latlng2 = new google.maps.LatLng(<?php echo"$lat";?>,<?php echo"$longi";?>);
 
 			//description untuk marker
  			var contentString = '<div id="content">'+
      			'<div id="siteNotice">'+
      			'</div>'+
      			'<p><b><?php echo"$nama";?></b>'+
      			'<div id="bodyContent">'+
      			'<p><?php echo"$alamat";?>'+
      			'</div>'+
      			'</div>';
  
  			// membuat sebuah window modal box
  			var infowindow = new google.maps.InfoWindow({
      			content: contentString, maxWidth: 400
  			});
 
  			var marker = new google.maps.Marker({    
      			position: latlng2,
      			map: map,
      			title: '<?php echo"$nama";?>'
 			});
 
  			//even listener google map utk menampilkan modal box description
  			google.maps.event.addListener(marker, 'click', function() {
      			infowindow.open(map,marker);
    		});
 
		}
 
		google.maps.event.addDomListener(window, 'load', initialize);
 
    </script>
</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<a href="#" class="navbar-brand">Warkop</a>
			<button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
				f
			</button>
			<div class="collapse navbar-collapse navHeaderCollapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span>&nbsp&nbspHome</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle = "dropdown"> <span class="glyphicon glyphicon-map-marker"></span>&nbsp&nbspLokasi <b class = "caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="tes.php?lokasi=batoh">Batoh</a></li>
							<li><a href="tes.php?lokasi=beurawe">Beurawe</a></li>
							<li class="divider"></li>
							<li><a href="tes.php?lokasi=darussalam">Darussalam</a></li>
							<li class="divider"></li>
							<li><a href="tes.php?lokasi=lampineung">Lampineung</a></li>
							<li><a href="tes.php?lokasi=lambhuk">Lambhuk</a></li>
							<li class="divider"></li>
							<li><a href="tes.php?lokasi=ulee kareng">Ulee Kareng</a></li>
							<li><a href="tes.php?lokasi=ulhe lheue">Ulee Lheue</a></li>
							<li class="divider"></li>
							<li><a href="tes.php?lokasi=prada">Prada</a></li>
						</ul>
					</li>
					<li><a href="about.html"><span class="glyphicon glyphicon-info-sign"></span>&nbsp&nbspAbout</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-send"></span>&nbsp&nbspContact</a></li>
				</ul>
				<div class="col-sm-4 col-md-3 col-lg-3">
       				<form class="navbar-form navbar-form-lm-small" role="search" action="">
    					<div class="input-group">
       						<input type="text" class="form-control input-sm" placeholder="Search" value="">
       						<div class="input-group-btn">
       							<button class="btn btn-danger btn-sm" type="submit">Search</button>
       						</div>
      					</div>
        			</form>
      			</div>
				<a href="login.php" class="navbar-btn btn-primary btn pull-right"><span class="glyphicon glyphicon-log-in"></span>&nbsp&nbsp&nbspLogin</a>
			</div>
		</div>
	</div>

	<div class="container">
		<div id="map-canvas"></div>
		<p><?php echo"$nama";?><br/>
    	<?php echo"$alamat";?></p>
	</div>

	<div class="navbar navbar-default navbar-fixed-bottom">
			<div class="container">
				<p class="navbar-text pull-left">Warkop</p>
				<a class="navbar-btn btn-danger btn pull-right"><span class="glyphicon glyphicon-log-in"></span>&nbsp&nbsp&nbspSubcribe</a>
			</div>	
		</div>	

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
</body>
</html>