<?php 

   include("../../config/cofig.php");
  
$output = "";
$pending = "pending";
$sql = "SELECT * FROM lead WHERE (fname LIKE '%".$_POST['search']."%' and verfication LIKE '%".$pending."%') or (centre LIKE '%".$_POST['search']."%' and verfication LIKE '%".$pending."%') or (email LIKE '%".$_POST['search']."%' and verfication LIKE '%".$pending."%')or(course LIKE '%".$_POST['search']."%' and verfication LIKE '%".$pending."%') or (time LIKE '%".$_POST['search']."%' and verfication LIKE '%".$pending."%' )";

$result = mysqli_query($connection,$sql);
if(mysqli_num_rows($result) > 0 ){
      $output .= "<h4 align='center'>Search Results</h4>";
      $output = '
      <table class="table table-sm">
      <thead>
             <tr>
               <th scope="col" class="table-info">Frist Name</th>
               <th scope="col" class="table-info">Email</th>
               <th scope="col" class="table-info">Course</th>
               <th scope="col" class="table-info">Centre</th>
               <th scope="col" class="table-info">Time</th>
               <th scope="col" class="table-info">Action</th>
             </tr>
           </thead>
           <tbody>
      ';
      while($row = mysqli_fetch_array($result))
      {
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
        <td>'.$sname.'</td>
        <td> '.$time.'</td>
        <td><button class="btn btn-sm btn-glow btn-primary view" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="'.$row['id'].'">View</button></td>
        </tr>
        </tbody>';
      }
      $output .=  '  </table>';
echo $output;
        
}else{
    echo "Nothing found";
}

?>