<?php
   include('../../config/pdoconfig.php');
   $id = $_POST['id'];
   
   $query = "UPDATE `lead` SET verfication = 'accepted' ,follow='interested',stat='not' WHERE id = '$id'";
   $statement = $connection ->prepare($query);
   $result = $statement->execute();
   if($result){
       echo "done";
   }

?>