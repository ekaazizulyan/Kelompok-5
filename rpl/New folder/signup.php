<?php

    include_once 'class.user.php';
    $user = new User();

    if (isset($_REQUEST['submit'])){
        extract($_REQUEST);
        $register = $user->reg_user($fullname, $uname,$upass, $uemail);
        if ($register) {
            // Registration Success
            echo 'Registration  successful <a href="login.php">Click here</a> to login';
        } else {
            // Registration Failed
            echo 'Registration failed. Email or Username already exits please try again';
        }
    }
?>

<html>
<head>
	<title>Login</title>
	<meta name="viewport" content="width=device-width, intial-scale=1.0">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
      
        <title>Register</title>
        <style>
            #container{width:400px; margin: 0 auto;}
        </style>
        <script language="javascript" type="text/javascript"> 
            function submitreg() {
                var form = document.reg;
                if(form.name.value == ""){
                    alert( "Enter name." );
                    return false;
                }
                else if(form.uname.value == ""){
                    alert( "Enter username." );
                    return false;
                }
                else if(form.upass.value == ""){
                    alert( "Enter password." );
                    return false;
                }
                else if(form.uemail.value == ""){
                    alert( "Enter email." );
                    return false;
                }
            } 
    	</script>
</head>
<body>
	<div class="navbar navbar-inverse navbar-static-top">
		<div class="container">
			<a href="#" class="navbar-brand">Warkop</a>
				<button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
				f
			</button>

			<div class="collapse navbar-collapse navHeaderCollapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="#">Blog</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle = "dropdown">Social Media <b class = "caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">Facebook</a></li>
							<li><a href="#">Twitter</a></li>
							<li><a href="#">Google+</a></li>
						</ul>
					</li>
					<li><a href="about.html">About</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 text">
				<div class="well">
					<form action="" method="post" name="reg">
						<h1 class="login-title" >Sign Up</h1>
						<br>
						<br>
    					<div class="form-group">
        					<input type="text" name="fullname" required class="form-control" placeholder="Fullname">
    					</div>
    					<div class="form-group">
        					<input type="text" class="form-control" name="uname" required placeholder="Username">
    					</div>
    					<div class="form-group">
        					<input type="text" class="form-control" name="uemail" required placeholder="Email">
    					</div>
    					<div class="form-group">
    						<input type="password" class="form-control" name="upass" required placeholder="Password">
    					</div>
                        <button type="submit" class="btn btn-primary" name="submit" value="Login" onclick="return(submitreg());">Register</button>
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