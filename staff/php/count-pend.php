<?php
    include("../../config/pdoconfig.php");
    session_start();
    $email = $_SESSION['email'];
    $sql = "SELECT * FROM lead where stat = 'pend' AND assign = '$email'";
     $statement = $connection->prepare($sql);
     $statement->execute();
     $result = $statement->rowCount();
     echo $result;
?>