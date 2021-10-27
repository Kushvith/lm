<?php
    include("../../config/pdoconfig.php");
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
              <th class="table-info">Edit</th>
            </tr>
          </thead>
          <tbody>
     ';
     $course = $_POST['course'];
     
     $sql = "SELECT * FROM lead WHERE course = '$course' ";
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
         <td><button class="btn btn-sm btn-glow btn-primary edit" data-id="'.$row['id'].'">Edit</button></td>
         </tr>
         </tbody>';
     }
   
    
     // echo $output;     
$output .=  '  </table>';
     echo $output;
?>