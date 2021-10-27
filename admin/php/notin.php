<?php
   include('../../config/pdoconfig.php');
   $id = $_POST['id'];
   $query = "UPDATE `lead` SET follow = 'not' WHERE id = '$id'";
  $statement = $connection->prepare($query);
  $result = $statement->execute();
  if($result){
    $sucess = "<div class='alert alert-success'>Form Submitted</div>";
  }
   echo $sucess;
?>