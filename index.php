<?php  ob_start();

//auth check
require_once('auth.php');

//embed header
require_once('header.php');

?>

<body>             
<h1 class="heading">My Google Map</h1>
<div align="center">Right Click to Drop a New Marker</div>
<div id="google_map"></div>


<?php 

//embed footer
require_once('footer.php');

ob_flush(); ?>