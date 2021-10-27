<?php
    include("../../config/pdoconfig.php");
    session_start();
    $output = '
     <table class="table table-sm">
     <thead>
            <tr>
              <th scope="col" class="table-info">Name</th>
              <th scope="col" class="table-info">Email</th>
              <th scope="col" class="table-info">Course</th>
              <th scope="col" class="table-info">Time</th>
              <th scope="col" class="table-info">view</th>
              <th scope="col" class="table-info">Pemding</th>
              <th scope="col" class="table-info">details</th>
            </tr>
          </thead>
          <tbody>
     ';
     $email = $_SESSION['email'];
     $sql = "SELECT * FROM lead where assign = '$email' AND stat = 'rejected'";
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
        <td>'.$email.'</td>
        <td>'.$course.'</td>
        <td> '.$time.'</td>
        <td><button class="btn btn-sm btn-glow btn-primary view" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="'.$row['id'].'">View</button></td>
        <td><button class="btn btn-sm btn-glow btn-info comp" data-id="'.$row['id'].'">pending</button></td>
        <td><button class="btn btn-success delete btn-sm mt-0.6 rej" data-id="'.$row['id'].'" data-bs-toggle="modal" data-bs-target="#exampleModal">details</button></td>
        </tr>
        </tbody>';
     }
   
    
     // echo $output;     
$output .=  '  </table>';
     echo $output;
?>
