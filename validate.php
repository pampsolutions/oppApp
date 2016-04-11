<?php ob_start(); ?>
<html>

<body>

<?php
//store the inputs in variables and hash the password
$username = $_POST['username'];
$password = hash('sha512', $_POST['password']);

//connect
require_once('db.php');

//set up sql query to check login
$sql = "SELECT user_id FROM users WHERE username = '$username' AND password = '$password'";

//execute query & store result
$result = $conn->query($sql);

//count how many rows our query returned & store in a variable
$count = $result->rowCount();

//evaluate how many rows we found to know if the login exists or not
if ($count >= 1) {
	echo 'Logged in Successfully.'; 

	//access the existing user's session on the server
	session_start();
	
	foreach  ($result as $row) {
		//get the identity from the users table & store in the session object
		$_SESSION['user_id'] = $row['user_id'];

		//send to index page
		header('location:index.php');
	}
	
}
else {
	echo 'Invalid Login';
}

$conn = null;

?>

</body>
</html>
<?php ob_flush(); ?>
