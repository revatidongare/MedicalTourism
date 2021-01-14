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

  if ($_POST['update'] == 'update_patient') {
        include '../config.php';
        
        if(isset($_SESSION['id']))
        {
          $id = $_SESSION['id'];
          $query = "SELECT * FROM `patient_master` WHERE `id` = $id";
           $stmt=$conn->prepare($query);
               $stmt->execute();
               $row=$stmt->fetch();
                   $conn=null;
          
          echo json_encode($row);
        }
        
    }

    // UPDATE SLIDER code...
    if(isset($_POST['update_patient'])){
      include '../config.php';
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
     $id = $_SESSION['id'];
     // $image = $_POST['image'];

    $image= $_FILES["image"]["name"];
    
    if ($image == "") {
       $query = "UPDATE `patient_master` SET `name`= '$name',`email`= '$email',`contact`= '$contact',`dob`= '$dob',`bloodgroup`= '$bloodgroup',`address`= '$address',`city`='$city',`state`='$state',`zipcode`= '$zipcode',`country`= '$country' WHERE `id` = '$id'";
  
         $stmt=$conn->prepare($query);
         $res=$stmt->execute();

        if($res){
          header('location:profile-settings.php?q=update');
            }
        else{
          header('location:profile-settings.php?q=3');
        }
    }else{

      $query = "SELECT * FROM `slider` WHERE `slider_id` = '$slider_id' ";
                       
        $stmt=$conn->prepare($query);
        $stmt->execute();
        $result=$stmt->fetch();
        $old_image=$result['image'];
        $path = "../assets/img/patients/$old_image";
        unlink($path);

      $target_dir = "../assets/img/patients/";
      $temp = explode(".", $_FILES["image"]["name"]);
      $img = round(microtime(true)) . '.' . end($temp);
      $target_file = $target_dir . $img;
      $uploadOk = 1;
      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      // Check if image file is a actual image or fake image
      if(isset($_POST["submit"])) {
          $check = getimagesize($_FILES["image"]["tmp_name"]);
          if($check !== false) {
             // echo "File is an image - " . $check["mime"] . ".";
              $uploadOk = 1;
          } else {
              //echo "File is not an image.";
              $uploadOk = 0;
          }
      }
      // Check if file already exists
      if (file_exists($target_file)) {
          //echo "Sorry, file already exists.";
          $uploadOk = 0;
      }
      // Allow certain file formats
      if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
      && $imageFileType != "gif" ) {
          echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
          $uploadOk = 0;
      }
      // Check if $uploadOk is set to 0 by an error
      if ($uploadOk == 0) {
          echo "Sorry, your file was not uploaded.";
      // if everything is ok, try to upload file
      } else {
          if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
              echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
          } else {
              echo "Sorry, there was an error uploading your file.";
          }
      }

      $query = "UPDATE `slider` SET `name`= '$name',`email`= '$email',`contact`= '$contact',`dob`= '$dob',`bloodgroup`= '$bloodgroup',`address`= '$address',`city`='$city',`state`='$state',`zipcode`= '$zipcode',`country`= '$country',`image`='$img' WHERE `id` ='$id'";
  
         $stmt=$conn->prepare($query);
         $res=$stmt->execute();

        if($res){
          header('location:profile-settings.php?q=update');
            }
        else{
          header('location:profile-settings.php?q=3');
        }
    }
    
  }
?>