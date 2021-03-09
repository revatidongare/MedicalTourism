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
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $youtube = $_POST['youtube'];
    $contact = $_POST['contact'];
     $description = $_POST['description'];
    $email = $_POST['email'];
    $feesinrs = $_POST['feesinrs'];
    $feesindollar = $_POST['feesindollar'];

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
        $license= $_FILES["license"]["name"];
          $degreeimage= $_FILES["degreeimage"]["name"];
    //   $school_id = $_POST['school_id'];
    // $photo = $_FILES["photo"]["name"];

      //Dp upload code.
    $target_dir = "../assets/img/doctors/";
    $temp = explode(".", $_FILES["image"]["name"]);
    $image1 = round(microtime(true)) . '.' . end($temp);
    $target_file1 = $target_dir . $image1;
    $uploadOk = 1;
    $iconFileType = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));

    // Check if file already exists
    if (file_exists($target_file1)) {
        // echo "Sorry, file already exists.";
        $uploadOk = 2;
    }
    // Allow certain file formats
    if($iconFileType != "jpg" && $iconFileType != "png" && $iconFileType != "jpeg"
    && $iconFileType != "gif" ) {
        //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk != 1) {
        // echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file1)) {
            echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your image1.";
        }
    }

    //license upload
     $target_dir111 = "../assets/img/doctors/license/";
    $temp = explode(".", $_FILES["license"]["name"]);
    $license1 = round(microtime(true)) . '.' . end($temp);
    $target_file111 = $target_dir111 . $license1;
    $uploadOk = 1;
    $iconFileType = strtolower(pathinfo($target_file111,PATHINFO_EXTENSION));

    // Check if file already exists
    if (file_exists($target_file111)) {
        // echo "Sorry, file already exists.";
        $uploadOk = 2;
    }
    // Allow certain file formats
    if($iconFileType != "jpg" && $iconFileType != "png" && $iconFileType != "jpeg"
    && $iconFileType != "gif" ) {
        //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk != 1) {
        // echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["license"]["tmp_name"], $target_file111)) {
            echo "The file ". basename( $_FILES["license"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your image1.";
        }
    }

    //degree upload
     $target_dir11 = "../assets/img/doctors/degree/";
    $temp = explode(".", $_FILES["degreeimage"]["name"]);
    $degreeimage1 = round(microtime(true)) . '.' . end($temp);
    $target_file11 = $target_dir11 . $degreeimage1;
    $uploadOk = 1;
    $iconFileType = strtolower(pathinfo($target_file11,PATHINFO_EXTENSION));

    // Check if file already exists
    if (file_exists($target_file11)) {
        // echo "Sorry, file already exists.";
        $uploadOk = 2;
    }
    // Allow certain file formats
    if($iconFileType != "jpg" && $iconFileType != "png" && $iconFileType != "jpeg"
    && $iconFileType != "gif" ) {
        //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk != 1) {
        // echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["degreeimage"]["tmp_name"], $target_file11)) {
            echo "The file ". basename( $_FILES["degreeimage"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your image.";
        }
    }

    $q = "INSERT INTO `doctor` (`city`, `experience`, `hospital`, `timeslot`, `address`, `specialities`, `fname`, `lname`, `dob`, `description`, `indianfees` , `internationalfees`, `qualification`, `image`, `license`, `degreecerti`, `email`, `password`, `youtube`, `contact_no`) VALUES ('$city', '$experience', '$hospital', '$timeslot', '$address', '$specialities', '$fname','$lname','$dob', '$description' , '$feesinrs','$feesindollar', '$qualification', '$image1', '$license1', '$degreeimage1', '$email', '$password' , '$youtube' , '$contact')";
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

  if(isset($_POST['addevent'])){
    $title = $_POST['title'];
    $description = $_POST['description'];
    $address = $_POST['address'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    // $specialities = $_POST['specialities'];
    // $experience = $_POST['experience'];
    // $password = $_POST['password'];
    // $address = $_POST['address'];
    // $city = $_POST['city'];
    // $qualification = $_POST['qualification'];
    // $timeslot = $_POST['timeslot'];
    //  $country = $_POST['country'];
     // $image = $_POST['image'];
      $image= $_FILES["image"]["name"];
    //   $school_id = $_POST['school_id'];
    // $photo = $_FILES["photo"]["name"];

      //file upload code.
    $target_dir = "../assets/img/event/";
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

    $q = "INSERT INTO `event` (`title`, `image`, `address`, `date`, `time`, `description`) VALUES ('$title', '$image', '$address', '$date', '$time', '$description')";
    $stmt=$conn->prepare($q);
  $stmt->execute();
  // $row = $stmt->fetch();
    $conn=null;

    if ($stmt) {
      
      header('location: news.php?q=3');
    }
    else{
      header('location: news.php?q=2');
     }
  }
?>