<?php ob_start();

require_once('auth.php');

require_once('header.php');

?>

<div id="dashboard">

<div class="row">
  <h1 style="text-align:left;">Dashboard</h1>
</div>

<?php
require_once('db.php');

$sql = "SELECT * FROM markers ORDER BY id DESC LIMIT 10";

$result = $conn->query($sql);

echo '
      <div class="row">
      <div class="col s12 l8">
        <table class="bordered highlight card" style="table-layout: fixed; width: 100%">
        <h2>Recently Added Markers</h2>
        <thead><tr><th>Title</th><th>Date</th><th>Main Intersection</th><th>Details</th><th>Edit</th><th>Delete</th></tr></thead><tbody>';

foreach ($result as $row) {
	echo '<tr><td>' . $row['name'] . '</td>
		<td>' . $row['date'] . '</td>
		<td>' . $row['city'] . '</td>
        <td>' . $row['address'] . '</td>
		<td class="hide-on-small-only"><a class="waves-effect waves-light btn green" href="marker-dash.php?id=' . $row['id'] .'">Edit</a></td>
		<td class="hide-on-small-only"><a class="waves-effect waves-light btn red" href="delete-dash.php?id=' . $row['id'] . '"
			onclick="return confirm(\'Are you sure you want to delete this marker?\');">Delete</a></td>
       <td class="hide-on-med-and-up"><a class="waves-effect waves-light btn-floating green" href="marker-dash.php?id=' . $row['id'] .'"><i class="material-icons">edit_mode</i></a></td>
		<td class="hide-on-med-and-up"><a class="waves-effect waves-light btn-floating red" href="delete-dash.php?id=' . $row['id'] . '"
			onclick="return confirm(\'Are you sure you want to delete this marker?\');"><i class="material-icons" id="del">delete</i></a></td>
		</tr>';
}

echo '</tbody></table></div>';

$sql = "SELECT * FROM IP ORDER BY id DESC LIMIT 10";

$result = $conn->query($sql);

echo '
      <div class="col s12 l4">
        <table class="bordered card">
        <h2>User Log</h2>
        <thead><tr><th>IP Address</th><th>Logout Time</th><th>Delete</th></tr></thead><tbody>';

foreach ($result as $row) {
	echo '<tr><td>' . long2ip($row['ip']) . '</td>
		<td>' . $row['time'] . '</td>
        <td class="hide-on-small-only"><a class="waves-effect waves-light btn red" href="delete-ip.php?id=' . $row['id'] . '"
			onclick="return confirm(\'Are you sure you want to delete this logout entry?\');">Delete</a></td>
        <td class="hide-on-med-and-up"><a class="waves-effect waves-light btn-floating red" href="delete-ip.php?id=' . $row['id'] . '"
			onclick="return confirm(\'Are you sure you want to delete this logout entry?\');"><i class="material-icons" id="del">delete</i></a></td>
		</tr>';
}

echo '</tbody></table></div></div>';

$conn = null;

?>

</div>

<?php
require_once('footer.php');

ob_flush(); ?>
