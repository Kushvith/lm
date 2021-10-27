<?php
include("../../config/pdoconfig.php");
 $id = $_POST['id'];
 $query = "SELECT * FROM lead WHERE id = '$id'";
 $statement = $connection->prepare($query);
$statement = $connection->prepare($query);
$statement->execute();
$result = $statement->fetchall();
foreach($result as $row){
    $fname =  $row['fname'];
    $sname = $row['sname'];
    $dob = $row['dob'];
    $gender = $row['gender'];
    $lang = $row['lang'];
    $fathername = $row['fathername'];
    $fathernumber = $row['fphno'];
    $address = $row['address'];
    $city = $row['city'];
    $state = $row['state'];
    $zip = $row['zip'];
    $email = $row['email'];
    $mno = $row['mobile no'];
    $qual = $row['qual'];
    $course = $row['course'];
    $centre = $row['centre'];
    $comments = $row['comments'];
    $rejquery = $row['rejquery'];
    $output = '      
         
         <tr><th>Full Name</th><td scope="row">'.$fname.'</td>
         <td>'.$sname.'</td></tr>
         <tr><th>Email</th><td>'.$email.'</td></tr>
         <tr><th>DOB</th><td>'.$dob.'</td></tr>
         <tr><th>Gender</th><td scope="row">'.$gender.'</td>
        <th>language <td>'.$lang.'</td></tr>
        <tr><th>Father Name</th><td scope="row">'.$fathername.'</td>
        <th>Father Number<td>'.$fathernumber.'</td></tr>        
        <tr><th>Address</th><td>'.$address.'</td></tr>
        <th>City<td>'.$city.'</td></tr>        
        <tr><th>State</th><td>'.$state.'</td></tr>
        <tr><th>ZIP Code</th><td>'.$zip.'</td></tr>
        <tr><th>Qualification</th><td>'.$qual.'</td></tr>
        <tr><th>Course</th><td>'.$course.'</td></tr>
        <tr><th>centre</th><td>'.$centre.'</td></tr>
        <tr><th>Comments</th><td>'.$comments.'</td></tr>
        <tr><th>Query</th><td>'.$rejquery.'</td></tr>
         ';
}
echo $output;
?>