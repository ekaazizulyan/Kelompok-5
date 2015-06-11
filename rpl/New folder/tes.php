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
		</style> 
	</head>
	<body>
		<div class="navbar navbar-inverse navbar-static-top">
			<div class="container">
				<a href="#" class="navbar-brand">Warkop</a>

				<button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
					f
				</button>

				<div class="collapse navbar-collapse navHeaderCollapse">
					<ul class="nav navbar-nav">
						<li><a href="home.php"><span class="glyphicon glyphicon-home"></span>&nbsp&nbspHome</a></li>
						<li class="dropdown active" >
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
					<!-- <a href="login.php" class="navbar-btn btn-primary btn pull-right"><span class="glyphicon glyphicon-log-in"></span>&nbsp&nbsp&nbspLogin</a> -->
					<p class="bs-component">
              			<a href="login.php" class="navbar-btn btn-primary btn pull-right"><span class="glyphicon glyphicon-log-in"></span>&nbsp&nbsp&nbspLogin</a>
              			<a href="signup.php" class="navbar-btn btn-danger btn pull-right"><span class="glyphicon glyphicon-log-in"></span>&nbsp&nbsp&nbspRegister</a>
            		</p>
				</div>
			</div>
		</div>

		<?php
			require "koneksi.php";
			$lokasi = $_GET["lokasi"];
	
			$sql = "SELECT * FROM daftar_warkop WHERE alamat LIKE '$lokasi'";
			$hasil = mysql_query($sql);
			$row = mysql_num_rows($hasil);

			if($row>=1) {
				echo "<div class='container'>
						<div class='row'>
								<div class='col-lg-5'>
									<div class='list-group'>";
				while($arr = mysql_fetch_array($hasil)) {
					echo "
							<a href='peta.php?id=".$arr['id']."' class='list-group-item'>
								<h4 class='list-group-item-heading'>
									".$arr['nama']."
								</h4>
								<p class='list-group-item-text'>".$arr['deskripsi']."</p>
							</a>						
					";
				} 
				echo "
							</div>
						</div>
					</div>
				</div>";
			}
			else {
				echo "
						<div class='container'>
							<div class='row'>
								<div class='col-md-4'>
									<div class='well'>
										tidak ada data<br>
									</div>
								</div>
							</div>
						</div>
					";
			}
		?>

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