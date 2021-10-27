<?php
    include("../../config/pdoconfig.php");
    session_start();
    $email = $_SESSION['email'];
    $output = '
    <table class="table">
    <thead class=" text-primary">
    <th>
     First Name
    </th>
    <th>
      Email
    </th>
  </thead>
  <tbody>
     ';
     $sql = "SELECT * FROM lead where stat = 'rejected' AND assign ='$email'";
     $statement = $connection->prepare($sql);
     $statement->execute();
     $result = $statement->fetchAll();
     foreach($result as $row){
         $id = $row['id'];
         $fname = $row['fname'];
         $email = $row['email'];
         $course = $row['course'];
         $time = $row['time'];
         $output .= '      <tr>
         <th scope="row">'.$fname.'</th>
         <td>'.$email.'</td>
         
         </tr>
         </tbody>';
     }
   
    
     // echo $output;     
$output .=  '  </table>';
     echo $output;
?>