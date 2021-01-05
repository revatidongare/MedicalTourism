<?php 
include '../config.php';

if(isset($_POST['login'])){
	$username = $_POST['mail'];
	$password = $_POST['password'];
	$q = "SELECT * FROM `admin` WHERE `mail` = '$username' AND `password` = '$password'";
	$stmt=$conn->prepare($q);
	$stmt->execute();
	$row = $stmt->fetch();
$conn=null;

	// $result = mysqli_query($con, $q);
	// $row = mysqli_fetch_array($result);
	if ($row) {
		session_start();
		$_SESSION['admin'] = $username;
		header('location: dashboard.php?login=1');
	}
	else{
		header('location: login.php?q=1');
	}
}

?>