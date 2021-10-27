<?php
include("../../config/pdoconfig.php");
$err = "";
$email = $_POST['email'];
$id = $_POST['id'];
$sql1 = "SELECT * FROM lead WHERE id='$id'";
$statement = $connection->prepare($sql1);
     $statement->execute();
     $result1 = $statement->fetchAll();
     foreach($result1 as $row){
         $centre = $row['centre'];
     }
     $sql = "SELECT * FROM login WHERE email = '$email' AND user = 'staff' AND centre = '$centre'";
     $statement = $connection->prepare($sql);
     $statement->execute();
     $result = $statement->fetchAll();

     if($result){
         $query = "UPDATE lead SET assign = '$email' , stat = 'pending' WHERE id = $id";
         $statement = $connection->prepare($query);
         $res = $statement->execute();
         if($res){
             $err =  "updated";
         }
     }
     else{
         $err = "user doesnot exists";
     }
    echo $err;
?>