<?php
    include("../../config/pdoconfig.php");
    $sql = "SELECT * FROM login where user = 'staff' ";
     $statement = $connection->prepare($sql);
     $statement->execute();
     $result = $statement->rowCount();
     echo $result;
?>