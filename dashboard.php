<?php ob_start();

require_once('auth.php');

require_once('header.php');

?>

<div id="dashboard">

<div class="row">
  <h1>Dashboard</h1>
</div>

<?php
require_once('db.php');

$sql = "SELECT * FROM markers ORDER BY id DESC LIMIT 10";

$result = $conn->query($sql);

echo '
      <div class="row">
      <div class="col s12 l7">
        <table class="bordered highlight" style="table-layout: fixed; width: 100%">
        <thead><tr class="heading"><th data-field="id">RECENT MARKERS</th><th></th><th></th><th><sub>10 most recent markers</sub></th><th></th><th></th></tr>        <tr><th>Name</th><th>Date</th><th>City</th><th>Description</th><th>Type</th></tr></thead><tbody>';

foreach ($result as $row) {
	echo '<tr><td>' . $row['name'] . '</td>
		<td>' . $row['date'] . '</td>
		<td>' . $row['city'] . '</td>
        <td>' . $row['address'] . '</td>
        <td>' . $row['type'] . '</td></tr>';
        
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
