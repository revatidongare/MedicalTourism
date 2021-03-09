<?php

include 'config.php';

if(isset($_POST['forgot_password'])){

	$username = $_POST['entered_username'];

	$q = "SELECT * FROM `patient_master` WHERE `email` = '$username'";

	$result = mysqli_query($con, $q);
	$row = mysqli_fetch_array($result);
	$con = null;
	$userid = $row['id'];
	$password = $row['password'];
	$mailid = $row['email'];
	

		// echo $userid;
		// echo "\n";
		// echo $mailid;
		// echo "\n";
		// echo $password;

		// exit(0);
		// email code
	$to = $mailid;
	$subject = "Hi " . $username . ", Welcome to Trust You Doctor....!";
	$body = '
	Dear ' . $username . ',
	Thank you for joining our site. Your request has been successfully submitted to our end 

	Your Password : ' . $password . '
	Kind Regards,
	Trust You Doctor Team.
	';
	$headers = 'From: contact@trustyoudoctor.com';

	if (mail($to, $subject, $body, $headers)) {
		header('location:login.php?q=3');
	}
	else{
		header('location:login.php?q=4');
	}

  // email end

}

?>
