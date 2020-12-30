<?php
  session_start();
// print_r($_SESSION);
if(isset($_POST['login'])){
  $doctor = $_POST['doctor'];
  $location = $_POST['location'];
  
  $q = "SELECT * FROM `doctor` WHERE `city` = '$location' OR `name`= '$doctor' OR `hospital` = '$doctor' ";
  include 'config.php';
  $stmt=$conn->prepare($q);
  $stmt->execute([$email,$password]);
  $row = $stmt->fetch();
    $id = $row['id'];
      $name = $row['name'];
  $conn=null;
  if ($row) {
    
     header('location: search.php?p=$id');
    // if ($id == 0 ) {
    //    $_SESSION['admin'] = $name;
    //     header('location: ../admin/manage_products.php');
    //   # code...
    // }else{
    // header('location: ../index.php?q='.md5(0));   
    // }

  }
  else{
   
   header('location: index.php?p=222'); 
  }
}
?>
