<?php ob_start(); 

require_once('auth.php');

require_once('header.php');

require_once('db.php');

$sql = "SELECT * FROM markers";

$result = $conn->query($sql);

echo '<table><tr><th>Name</th><th>Date</th><th>City/Town/District</th><th>Description</th><th>Lat</th><th>Lng</th><th>Edit</th><th>Delete</th></tr>';

foreach ($result as $row) {
	echo '<tr><td>' . $row['name'] . '</td>
		<td>' . $row['date'] . '</td>
		<td>' . $row['city'] . '</td>
        <td>' . $row['address'] . '</td>
        <td>' . $row['lat'] . '</td>
        <td>' . $row['lng'] . '</td>
		<td><a href="marker.php?id=' . $row['id'] .'">Edit</a></td>
		<td><a href="delete-marker.php?id=' . $row['id'] . '" 
			onclick="return confirm(\'Are you sure you want to delete this marker?\');">Delete</a></td>
		</tr>';
}

echo '</table>';

$conn = null;

require_once('footer.php');

ob_flush(); ?>