<?php
   include('../../config/pdoconfig.php');
   $id = $_POST['id'];
   echo $id;
   $query = "DELETE FROM `lead` WHERE id = '$id'";
   $statement = $connection ->prepare($query);
   $result = $statement->execute();
   if($result){
       echo "done";
   }

?>