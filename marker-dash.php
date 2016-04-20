<?php ob_start();

require_once('header.php');

if (isset($_GET['id'])) {
	$id = $_GET['id'];

	try {
	    require_once('db.php');

	    $sql = "SELECT * FROM markers WHERE id = :id";
	    $cmd = $conn->prepare($sql);
	    $cmd->bindParam(':id', $id, PDO::PARAM_INT);
	    $cmd->execute();
	    $result = $cmd->fetchAll();

	    foreach ($result as $row) {
	    	$name = $row['name'];
	    	$date = $row['date'];
	    	$city = $row['city'];
            $address = $row['address'];
	    }

	    //disconnect
	    $conn = null;
	}
	catch (Exception $e) {
		mail('pampsolutions@outlook.com', 'App Error', $e, 'From: pampsolutions@outlook.com');

		header('location:error.php');
		exit();
	}
}
?>
<div id="dashboard">

<div class="row">
  <h1>Edit a Marker</h1>
</div>

<div class="card edit-card">
<form method="post" action="save-marker-dash.php">

<div>
    <label for="name">Descriptive Title:</label>
    <input name="name" required value="<?php echo $name; ?>" />
</div>
<div>
    <label for="date">Date:</label>
    <input name="date" required value="<?php echo $date; ?>" />
</div>
<div>
    <label for="city">Main Intersection:</label>
    <input name="city" required value="<?php echo $city; ?>" />
</div>
<div>
    <label for="address">Details:</label>
    <input name="address" required value="<?php echo $address; ?>" />
</div>
<input type="hidden" name="id" value="<?php echo $id; ?>" />
<input type="submit" class="waves-effect waves-light btn" value="Save" />

</form>
</div>
</div>

<?php
//embed footer
require_once('footer.php');

ob_flush();
?>
