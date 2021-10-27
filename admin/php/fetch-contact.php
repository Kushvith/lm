<?php
    include("../../config/pdoconfig.php");
    $output = '
     <table class="table table-sm">
     <thead>
            <tr>
              <th scope="col" class="table-info">Name</th>
              <th scope="col" class="table-info">Email</th>
              <th scope="col" class="table-info">phone</th>
              <th scope="col" class="table-info">Time</th>
              <th scope="col" class="table-info">message</th>
            </tr>
          </thead>
          <tbody>
     ';
     $sql = "SELECT * FROM contact ORDER BY id desc";
     $statement = $connection->prepare($sql);
     $statement->execute();
     $result = $statement->fetchAll();
     foreach($result as $row){
         $id = $row['id'];
         $fname = $row['name'];
        
         $email = $row['email'];
         $course = $row['phno'];
         $time = $row['time'];
         $message = $row['message'];
         $output .= '      <tr>
        <th scope="row">'.$fname.'</th>
        <td>'.$email.'</td>
        <td>'.$course.'</td>
        <td> '.$time.'</td>
        <td>'.$message.'</td></td>
        </tr>
        </tbody>';
     }
   
    
     // echo $output;     
$output .=  '  </table>';
     echo $output;
?>