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
              <th scope="col" class="table-info">Assigned</th>
              <th scope="col" class="table-info">ststus</th>
              <th scope="col" class="table-info">view</th>
              <th scope="col" class="table-info">Action</th>
            </tr>
          </thead>
          <tbody>
     ';
     $sql = "SELECT * FROM lead where follow = 'interested' AND stat !='not'";
     $statement = $connection->prepare($sql);
     $statement->execute();
     $result = $statement->fetchAll();
     foreach($result as $row){
         $id = $row['id'];
         $fname = $row['fname'];
         $sname = $row['sname'];
         $email = $row['email'];
         $course = $row['course'];
         $assign = $row['assign'];
         $stat = $row['stat'];
         $output .= '      <tr>
         <th scope="row">'.$fname.'</th>
         <td>'.$sname.'</td>
         <td>'.$email.'</td>
         <td>'.$course.'</td>
         <td> '.$assign.'</td>
         <td>'.$stat.'</td>
         <td><button class="btn btn-sm btn-glow btn-primary view" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="'.$row['id'].'">View</button></td>
         <td>
        <button class="btn btn-sm btn-glow btn-info assign" data-id="'.$row['id'].'">Re-Assign</button></td>
        
         
       </div></div></td>
         </tr>
         </tbody>';
     }
   
    
     // echo $output;     
$output .=  '  </table>';
     echo $output;
?>