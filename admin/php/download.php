<?php
require('../php/vendor/autoload.php');
  include('../../config/pdoconfig.php');
   $sql = "SELECT * FROM login WHERE user = 'staff'";
   $statement = $connection->prepare($sql);
   $statement->execute();
   $result = $statement->fetchAll();
  
  if($result){
    $html='<style>table,td,th{ border:1px solid red;}</style><table class="table">';
    $html.='<tr><td>Name</td><td>Email</td><td>department</td><td>time</td><td>centre</td></tr>';
  foreach($result as $row){
    $name = $row['name'];
    $email = $row['email'];
    $course = $row['department'];
    $time = $row['time'];
    $sname = $row['centre'];
   
    $html.='<tr><td>'.$name.'</td><td>'.$email.'</td><td>'.$course.'</td><td>'.$time.'</td><td>'.$sname.'</td></tr>';
}
	$html.='</table>';
}else{
	$html="Data not found";
}
$mpdf=new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$file='../../downloads/'.time().'.pdf';
$mpdf->output($file,'I');

//D
//I
//F
//S
?>