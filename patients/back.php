<?php include 'config.php';


	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$q = "SELECT * FROM `patient_master` WHERE `name` = '$username' AND `password` = '$password'";
		$result = mysqli_query($con, $q);
		$row = mysqli_fetch_array($result);
		if ($row) {
			session_start();
			$_SESSION['admin'] = $username;
			header('location: index.php?login=1');
		}
		else{
			header('location: login.php?q=1');
		}
	}
?>