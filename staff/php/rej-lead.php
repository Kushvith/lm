<?php
   include('../../config/pdoconfig.php');
   $id = $_POST['id'];
   $text = $_POST['text'];
   $query = "UPDATE `lead` SET stat='rejected' , rejquery = '$text' WHERE id = '$id'";
   $statement = $connection ->prepare($query);
   $result = $statement->execute();
   if($result){
       echo "done";
   }

?>