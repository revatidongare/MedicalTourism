<?php 
include '../config.php';

  if(isset($_POST['register'])){
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $bloodgroup = $_POST['bloodgroup'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zipcode = $_POST['zipcode'];
     $country = $_POST['country'];
     $image = $_POST['image'];
    //   $school_id = $_POST['school_id'];
    // $photo = $_FILES["photo"]["name"];


      //file upload code.
    $target_dir = "../assets/img/patients/";
    $target_file = $target_dir . basename($_FILES["photo"]["name"]);
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
      if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
        // echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }

    $q = "INSERT INTO `patient_master`(`name`, `contact`, `email`, `dob`, `bloodgroup`,`password`,`address`, `city`, `state` , `zipcode`, `country`,`image`) VALUES ('$name', '$contact', '$email', '$dob' , '$bloodgroup','$password','$address','$city', '$state', '$zipcode', '$country','$image')";
    $stmt=$conn->prepare($q);
  $stmt->execute();
  // $row = $stmt->fetch();
    $conn=null;

    if ($stmt) {
      session_start();
      $_SESSION['id'] = $id;
      header('location: patient-dashboard.php?q=3');
    }
    else{
      header('location: ../register.php?q=2');
     }
  }
?>