<?php
    include("../../config/pdoconfig.php");
    $id = $_POST['id'];
    $sql = "SELECT * FROM lead where id = '$id'";
    $statement = $connection->prepare($sql);
    $statement->execute();
    $result = $statement->fetchAll();
    foreach($result as $row){
        echo $row['rejquery'];
    }
    ?>