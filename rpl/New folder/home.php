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
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <title>Hello <?php $user->get_fullname($uid); ?> (Warkop)</title>
        <meta name="viewport" content="width=device-width, intial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <style>
            .padding {
                padding-top: 70px;
            }
        </style> 
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

                    <a href="home.php?q=logout" class="navbar-btn btn-primary btn pull-right"><span class="glyphicon glyphicon-log-out"></span>&nbsp&nbsp&nbsp<?php $user->get_fullname($uid);?>&nbsp&nbsp&nbsp(Logout)</a>
                </div>
            </div>
        </div>

        <div class="container padding">
            <div class="jumbotron">
                <center>
                    <h1>Hello</h1>
                    <p>I'm Khalid Farhan</p>
                    <!-- <a class="btn btn-default">Watch Now!</a> -->
                    <a class="btn btn-info">Read More</a>
                </center>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center">
                    <div class="well">
                    <!-- <h3><a href="#">Bootstrap</a></h3>
                    <p>jasfhksdjfsd sdjfsjdfkjjshdf  dfgjkhskjfghks skdhfksdhgkhsdf kdhgkjsbdkjbf sdkjghskdhf kjhsgjshkf kruhfsfbdjh skjdcknskdh</p> -->

                        <div class="txtHead">
                            <img src="http://cs.unsyiah.ac.id/~wlisra/assets/images/usk-logo.png">
                        </div>
                        <h3>Syiah Kuala University</h3>
                        <h3><a href="http://unsyiah.ac.id" class="btn btn-info">Read More</a></h3>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="well">
                    <!-- <h3><a href="#">Bootstrap</a></h3>
                    <p>jasfhksdjfsd sdjfsjdfkjjshdf  dfgjkhskjfghks skdhfksdhgkhsdf kdhgkjsbdkjbf sdkjghskdhf kjhsgjshkf kruhfsfbdjh skjdcknskdh</p> -->

                        <div class="txtHead">
                            <img src="http://cs.unsyiah.ac.id/~wlisra/assets/images/jif-logo.png">
                        </div>
                        <h3>Informatics</h3>
                        <h3><a href="http://informatika.unsyiah.ac.id" class="btn btn-info">Read More</a></h3>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="well">
                    <!-- <h3><a href="#">Bootstrap</a></h3>
                    <p>jasfhksdjfsd sdjfsjdfkjjshdf  dfgjkhskjfghks skdhfksdhgkhsdf kdhgkjsbdkjbf sdkjghskdhf kjhsgjshkf kruhfsfbdjh skjdcknskdh</p> -->

                        <div class="txtHead">
                            <img src="http://cs.unsyiah.ac.id/~wlisra/assets/images/hmif-logo.png">
                        </div>
                        <h3>HMIF</h3>
                        <h3><a href="#" class="btn btn-info">Read More</a></h3>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
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
