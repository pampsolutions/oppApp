<?php ob_start(); 

require_once('header.php');

?>

<div id="editMarker">

	<div class="row">
	  <h1>Dashboard</h1>
	</div>

<?php

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
            $type = $row['type'];
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
<div class="container">

<h2>Edit a Marker</h2>

<div class="card edit-card">
	
<form method="post" action="save-marker.php">

<div>
    <label for="name">Name:</label>
    <input name="name" required value="<?php echo $name; ?>" />
</div>
<div>
    <label for="date">Date:</label>
    <input name="date" required value="<?php echo $date; ?>" />
</div>
<div>
    <label for="city">City:</label>
    <input name="city" required value="<?php echo $city; ?>" />
</div>
<div>
    <label for="address">Description:</label>
    <input name="address" required value="<?php echo $address; ?>" />
</div>
<div>
    <label for="type">Type:</label>
    <select name="type" required value="<?php echo $type; ?>">
        <option value="Green">Green</option>
        <option value="Orange">Orange</option>
        <option value="Red">Red</option>
    </select>
</div>
<input type="hidden" name="id" value="<?php echo $id; ?>" />
<input type="submit" class="waves-effect waves-light btn green" value="Save" />

</form>
</div>

</div>

</div>

<?php 
//embed footer
require_once('footer.php'); 

ob_flush();
?>
