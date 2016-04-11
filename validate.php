<?php ob_start(); ?>
<html>

<body>

<?php
$username = $_POST['username'];
$password = hash('sha512', $_POST['password']);

require_once('db.php');

$sql = "SELECT user_id FROM users WHERE username = '$username' AND password = '$password'";

$result = $conn->query($sql);

$count = $result->rowCount();

if ($count >= 1) {
	echo 'Logged in Successfully.'; 

	session_start();
	
	foreach  ($result as $row) {
		$_SESSION['user_id'] = $row['user_id'];

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
