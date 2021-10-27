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
              <th scope="col" class="table-info">view</th>
              <th scope="col" class="table-info">Action</th>
            </tr>
          </thead>
          <tbody>
     ';
     $sql = "SELECT * FROM lead where follow = 'interested'";
     $statement = $connection->prepare($sql);
     $statement->execute();
     $result = $statement->fetchAll();
     foreach($result as $row){
         $id = $row['id'];
         $fname = $row['fname'];
         $sname = $row['centre'];
         $email = $row['email'];
         $course = $row['course'];
         $time = $row['time'];
         $output .= '      <tr>
        <th scope="row">'.$fname.'</th>
        <td>'.$email.'</td>
        <td>'.$course.'</td>
        <td> '.$time.'</td>
        <td>'.$sname.'</td>
        <td><button class="btn btn-sm btn-glow btn-primary view" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="'.$row['id'].'">View</button></td>
        <td><div class="d-flex justify-content-center"><div class="d-flex flex-row bd-highlight mb-3">
        <div class="p-2 bd-highlight"><button class="btn btn-sm btn-glow btn-info notin " data-id="'.$row['id'].'">not Interest</button></div>
        <div class="p-2 bd-highlight"><button class="btn btn-danger delete" data-id="'.$row['id'].'"><i class="fa fa-times" aria-hidden="true"></i></button></div>
        
      </div></div></td>
        </tr>
        </tbody>';
     }
   
    
     // echo $output;     
$output .=  '  </table>';
     echo $output;
?>