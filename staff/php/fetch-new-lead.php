<?php
    include("../../config/pdoconfig.php");
    session_start();
    $email = $_SESSION['email'];

    $output = '
     <table class="table table-sm">
     <thead>
            <tr>
              <th scope="col" class="table-info">Frist Name</th>
              <th scope="col" class="table-info">Second Name</th>
              <th scope="col" class="table-info">Email</th>
              <th scope="col" class="table-info">Course</th>
              <th scope="col" class="table-info">Time</th>
              <th scope="col" class="table-info">Action</th>
            </tr>
          </thead>
          <tbody>
     ';
     $sql = "SELECT * FROM lead where stat = 'pending' AND assign = '$email' ";
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
         <td><button class="btn btn-sm btn-glow btn-primary view" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="'.$row['id'].'">View</button></td>
         </tr>
         </tbody>';
     }
   
    
     // echo $output;     
$output .=  '  </table>';
     echo $output;
?>
 
