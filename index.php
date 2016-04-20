<?php  ob_start();

//auth check
require_once('auth.php');

//embed header
require_once('header.php');

?>
<script type="text/javascript" src="js/map.js"></script>
<div id="google_map"></div>

<?php

//embed footer
require_once('footer.php');

ob_flush(); ?>
