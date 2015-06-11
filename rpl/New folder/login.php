<?php
	session_start();
	include_once 'class.user.php';
	$user = new User();

	/*$nama = $user->get_session();*/

	if (isset($_REQUEST['submit'])) { 
		extract($_REQUEST);   
	    $login = $user->check_login($emailusername, $password);
	    if ($login) {
	        // Registration Success
	       	header("location:home.php");
	    } 
	    else {
	        // Registration Failed
	        header("location:index.php");
	    }
	}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Login</title>
	<meta name="viewport" content="width=device-width, intial-scale=1.0">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>OOP Login Module</title>
		<style>
            #container{width:400px; margin: 0 auto;}
			
			.padding {
				padding-top: 70px;
			}
		</style>
		<script language="javascript" type="text/javascript"> 
            
            function submitlogin() {
                var form = document.login;
				if(form.emailusername.value == ""){
					alert( "Enter email or username." );
					return false;
				}
				else if(form.password.value == ""){
					alert( "Enter password." );
					return false;
				}	 
			}
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

	<div class="container padding">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 text">
				<div class="well">
					<form action="" method="post" name="login">
						<h1 class="login-title" >Sign In</h1>
						<br>
						<br>
    					<div class="form-group">
        					<input type="text" class="form-control" name="emailusername" placeholder="Username">
    					</div>
    					<div class="form-group">
        					<input type="password" class="form-control" name="password" placeholder="Password">
    					</div>
    					<!-- <td><input type="submit" name="submit" value="Login" onclick="return(submitlogin());"></td> -->
    					<button type="submit" class="btn btn-primary" name="submit" value="Login" onclick="return(submitlogin());">Login</button>
					</form>
				</div>
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
</body>
</html>