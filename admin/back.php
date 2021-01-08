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
		header('location: index.php?q=1');
	}
}

?>

<?php 
include '../config.php';

  if(isset($_POST['registerdoctor'])){
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $fees = $_POST['fees'];
    $hospital = $_POST['hospital'];
    $specialities = $_POST['specialities'];
    $experience = $_POST['experience'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $qualification = $_POST['qualification'];
    $timeslot = $_POST['timeslot'];
     $country = $_POST['country'];
     // $image = $_POST['image'];
     	$image= $_FILES["image"]["name"];
    //   $school_id = $_POST['school_id'];
    // $photo = $_FILES["photo"]["name"];

      //file upload code.
    $target_dir = "../assets/img/doctor/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $iconFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if file already exists
    if (file_exists($target_file)) {
        // echo "Sorry, file already exists.";
      $uploadOk = 2;
    }
    // Allow certain file formats
    if($iconFileType != "jpg" && $iconFileType != "jpeg" && $iconFileType != "png" ) {
        // echo "Sorry, only PDF files are allowed.";
      $uploadOk = 3;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk != 1) {
        // echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        // echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }

    $q = "INSERT INTO `doctor` (`city`, `experience`, `hospital`, `timeslot`, `address`, `specialities`, `name`, `fees`, `qualification`, `image`, `email`, `password`, `contact_no`) VALUES ('$city', '$experience', '$hospital', '$timeslot', '$address', '$specialities', '$name', '$fees', '$qualification', '$image', '$email', '$password' , '$contact')";
    $stmt=$conn->prepare($q);
  $stmt->execute();
  // $row = $stmt->fetch();
    $conn=null;

    if ($stmt) {
      
      header('location: doctor-list.php?q=3');
    }
    else{
      header('location: doctor-list.php?q=2');
     }
  }
?>