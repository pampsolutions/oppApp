<?php ob_start();

require_once('auth.php');

require_once('header.php');

?>

<div id="markerLog">
  <div class="row">
    <h1>Dashboard</h1>
  </div>

<?php

require_once('db.php');

$sql = "SELECT * FROM markers ORDER BY id DESC";

$result = $conn->query($sql);

$typeO = '<span class="orange relative" style="padding:5px 20px; border-radius:100%;">' . $types . '</span>';
$typeG = '<span class="green relative" style="padding:5px 20px; border-radius:100%;">' . $types . '</span>';
$typeR = '<span class="red relative" style="padding:5px 20px; border-radius:100%;">' . $types . '</span>';

echo '
      <div class="row container">
      <div class="col s12">
        <table class="bordered highlight" style="table-layout: fixed; width: 100%">
        <h2>Marker Log</h2>
        <thead><tr><th>Name</th><th>Date</th><th>City</th><th>Description</th><th>Type</th><th>Edit</th><th>Delete</th></tr></thead><tbody>';

foreach ($result as $row) {
	  $types = $row['type'];

if(false !== strpos($types, 'Green')){
  $types = $typeG;
}
elseif (false !== strpos($types, 'Red')){
  $types = $typeR;
}
elseif (false !== strpos($types, 'Orange')){
  $types = $typeO;
}
	echo '<tr><td>' . $row['name'] . '</td>
		<td>' . $row['date'] . '</td>
		<td>' . $row['city'] . '</td>
        <td>' . $row['address'] . '</td>
        <td>' . $types . '</td>
		<td class="hide-on-small-only"><a class="waves-effect waves-light btn green" href="marker.php?id=' . $row['id'] .'">Edit</a></td>
		<td class="hide-on-small-only"><a class="waves-effect waves-light btn red" href="delete-marker.php?id=' . $row['id'] . '"
			onclick="return confirm(\'Are you sure you want to delete this marker?\');">Delete</a></td>
       <td class="hide-on-med-and-up"><a class="waves-effect waves-light btn-floating green" href="marker.php?id=' . $row['id'] .'"><i class="material-icons">edit_mode</i></a></td>
		<td class="hide-on-med-and-up"><a class="waves-effect waves-light btn-floating red" href="delete-marker.php?id=' . $row['id'] . '"
			onclick="return confirm(\'Are you sure you want to delete this marker?\');"><i class="material-icons center-align">delete</i></a></td>
		</tr>';
}

echo '</tbody></table></div></div>';

$conn = null;

?>

</div>

<?php 
require_once('footer.php');

ob_flush(); ?>
