<?php
   include('../../config/pdoconfig.php');
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
  $college = $_POST['centre'];
  
  $query = "INSERT INTO `lead` ( `fname`, `sname`, `dob`, `gender`, `lang`, `fathername`, `fphno`, `address`, `city`, `state`, `zip`, `email`, `mobile no`, `qual`, `course`,`centre`,`social`,`verfication`,`follow`,`stat`) VALUES ('$fname', '$sname', '$dob', '$gender', '$lang', '$faname', '$fno', '$address', '$city', '$state', '$zip', '$email', '$mno', '$qual', '$courses','$college','admin','accepted','interested','not')";
  $statement = $connection->prepare($query);
  $result = $statement->execute();
  if($result){
    $sucess = "<div class='alert alert-success'>Form Submitted</div>";
  }
   echo $sucess;
?>