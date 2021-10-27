<?php
   include('../../config/pdoconfig.php');
   $id = $_POST['id'];
   $fname = $_POST['fname'];
  $sname = $_POST['sname'];
  $dob = $_POST['dob'];
  $gender = $_POST['gender'];
  $lang = $_POST['lang'];
  $faname = $_POST['faname'];
  $fno = $_POST['fno'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $zip = $_POST['zip'];
  $email = $_POST['email'];
  $mno = $_POST['mno'];
  $qual = $_POST['qual'];
  $courses = $_POST['course'];
  $query = "UPDATE `lead` SET `fname`='$fname',`sname`='$sname',`dob`='$dob',`gender`='$gender',`lang`='$lang',`fathername`='$faname',`fphno`='$fno',`address`='$address',`city`='$city',`state`='$state',`zip`='$zip',`email`='$email',`mobile no`='$mno',`qual`='$qual',`course`='$courses' WHERE id = '$id'";
  $statement = $connection->prepare($query);
  $result = $statement->execute();
  if($result){
    $sucess = "<div class='alert alert-success'>Form Submitted</div>";
  }
   echo $sucess;
?>