<?php
    session_start();
    include_once 'class.user.php';
    $user = new User();

    $uid = $_SESSION['uid'];

    if (!$user->get_session()){
       header("location:login.php");
    }

    if (isset($_GET['q'])){
        $user->user_logout();
        header("location:login.php");
    }
?>

<html>
	<head>
		<title>Khalid Farhan Homepage</title>
		<meta name="viewport" content="width=device-width, intial-scale=1.0">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="custom.css" rel="stylesheet">
		<style>
			.padding {
				padding-top: 70px;
			}
			#map {
       			margin: 10px;
        		width: 300px;
        		height: 243px;  
        		padding: 10px;
      		}
		</style>
		<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script> 
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
								<li><a href="tes.php?lokasi=Beurawe">Beurawe</a></li>
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
						<li><a href="add-data.php"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp&nbspAdd Data</a></li>
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
					<!-- <a href="login.php" class="navbar-btn btn-primary btn pull-right"><span class="glyphicon glyphicon-log-in"></span>&nbsp&nbsp&nbspLogin</a> -->
					<a href="home.php?q=logout" class="navbar-btn btn-primary btn pull-right"><span class="glyphicon glyphicon-log-out"></span>&nbsp&nbsp&nbsp<?php $user->get_fullname($uid);?>&nbsp&nbsp&nbsp(Logout)</a>
				</div>
			</div>
		</div>

		<div class="container padding">
			<div class="row">
				<div class="col-md-4">
					<div class="well">
						<center>
							<div id="map"></div>
						</center>
					</div>
				</div>
				<div class="col-md-6">
					<div class="well">
						<form method = 'POST' action='simpan.php' class="form-group">
      						<input type="text" class="form-control" name='nama_lokasi' id='nama_lokasi' placeholder="Nama Warkop">
      						<br>
      						<select name="alamat" class="form-control">
          						<option value="Lampineung">Lampineung</option>
        	  					<option value="Beurawe">Beurawe</option>
    	      					<option value="Prada">Prada</option>
	          					<option value="Ulee Kareng">Ulee Kareng</option>
          						<option value="Rukoh">Rukoh</option>
          						<option value="Rukoh">Kota</option>
          					</select>
          					<br>
          					<input type="text" name='deskripsi' id='deskripsi' class="form-control" placeholder="Deskripsi warkop">
          					<br>
          					<input type="text" name='latitude' id='latitude' class="form-control">
          					<br>	
        					<input type="text" name='longitude' id='longitude' class="form-control">
        					<br>
							<button type="submit" id="submit" class="btn btn-info">Submit</button>		
      					</form>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-md-offset-3">
			<div class="bs-example">
    			<div class="alert alert-info">
        			<!-- <a href="#" class="close" data-dismiss="alert">&times;</a> -->
        			<strong>Info!</strong> Geser picker pada maps untuk menandai warkop anda
    			</div>
			</div>
		</div>


		<div class="navbar navbar-default navbar-fixed-bottom">
			<div class="container">
				<p class="navbar-text pull-left">Warkop</p>
				<a class="navbar-btn btn-danger btn pull-right"><span class="glyphicon glyphicon-log-in"></span>&nbsp&nbsp&nbspSubcribe</a>
			</div>	
		</div>

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="js/bootstrap.js"></script>

		<script type="text/javascript">
    	//* Fungsi untuk mendapatkan nilai latitude longitude
			function updateMarkerPosition(latLng) {
  				document.getElementById('latitude').value = [latLng.lat()]
    			document.getElementById('longitude').value = [latLng.lng()]
			}
       
			var map = new google.maps.Map(document.getElementById('map'), {
				zoom: 15,
				center: new google.maps.LatLng(5.55896624613971,95.32950172283938),
 				mapTypeId: google.maps.MapTypeId.ROADMAP
  			});
			//posisi awal marker   
			var latLng = new google.maps.LatLng(5.55896624613971,95.32950172283938);
 
/* buat marker yang bisa di drag lalu 
  panggil fungsi updateMarkerPosition(latLng)
 dan letakan posisi terakhir di id=latitude dan id=longitude
 */
			var marker = new google.maps.Marker({
    			position : latLng,
    			title : 'lokasi',
    			map : map,
   				draggable : true
  			});
   
			updateMarkerPosition(latLng);
			google.maps.event.addListener(marker, 'drag', function() {
 // ketika marker di drag, otomatis nilai latitude dan longitude
 //menyesuaikan dengan posisi marker 
    			updateMarkerPosition(marker.getPosition());
  			});
		</script>

	</body> 
</html>