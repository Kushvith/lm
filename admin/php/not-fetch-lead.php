<?php
    include("../../config/pdoconfig.php");
    $output = '
    <table class="table">
    <thead class=" text-primary">
    <th>
     First Name
    </th>
    <th>
      Email
    </th>
    <th>
      Course
    </th>
    <th class="text-right">
      Time
    </th>
  </thead>
  <tbody>
     ';
     $sql = "SELECT * FROM lead where follow = 'not'";
     $statement = $connection->prepare($sql);
     $statement->execute();
     $result = $statement->fetchAll();
     foreach($result as $row){
         $id = $row['id'];
         $fname = $row['fname'];
         $sname = $row['sname'];
         $email = $row['email'];
         $course = $row['course'];
         $time = $row['time'];
         $output .= '      <tr>
         <th scope="row">'.$fname.'</th>
         <td>'.$sname.'</td>
         <td>'.$email.'</td>
         <td>'.$course.'</td>
         <td> '.$time.'</td>
         </tr>
         </tbody>';
     }
   
    
     // echo $output;     
$output .=  '  </table>';
     echo $output;
?>