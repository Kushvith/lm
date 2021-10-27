<?php 

include("../../config/pdoconfig.php");
    $sql = "SELECT * FROM lead where follow = 'not' ";
     $statement = $connection->prepare($sql);
     $statement->execute();
     $result = $statement->rowCount();
     echo $result;
?>