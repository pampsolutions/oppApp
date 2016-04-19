<!DOCTYPE html>
<html>
<head>
<title>OPP App</title>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&sensor=false"></script>
<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--Import materialize.css-->
<link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
<link type="text/css" rel="stylesheet" href="css/index.css" media="screen,projection" />
<link rel="stylesheet" href="css/map.css" />
<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

</head>

<body>
<div class="navbar-fixed">
        <nav>

            <div class="nav-wrapper black">

                <a href="#!" class="brand-logo right"><img class="responsive-img" id="logo" src="logo.png" /></a>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="hide-on-med-and-down">
                    <li class="search">
                        <input id="box" type="text" name="Search" placeholder="Search" class="center" />
                    </li>
                    <li><a href="#"><i class="material-icons" id="align">search</i></a></li>
                    <li><a href="dashboard.php">DASHBOARD</a></li>
                    <li><a href="index.php">MAP</a></li>
                    <li><a href="userguide.html">USER GUIDE</a></li>
                    <li><a href="markers.php">COMMENT LOG</a></li>
                    <li><a href="logout.php">LOGOUT</a></li>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li><img src="logo.png" class="responsive-img" id="logo2" /></li>
                    <li><a href="dashboard.php">DASHBOARD</a></li>
                    <li><a href="index.php">MAP</a></li>
                    <li><a href="userguide.php">USER GUIDE</a></li>
                    <li><a href="markers.php">COMMENT LOG</a></li>
                    <li><a href="logout.php">LOGOUT</a></li>


                </ul>
            </div>
        </nav>
    </div>
