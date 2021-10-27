<?php
   include('../../config/pdoconfig.php');
   $id = $_POST['id'];
   
   $query = "UPDATE `lead` SET stat='pend' WHERE id = '$id'";
   $statement = $connection ->prepare($query);
   $result = $statement->execute();
   if($result){
       echo "done";
   }

?>