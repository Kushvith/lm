<?php
   include('../../config/pdoconfig.php');
   $id = $_POST['id'];
   $output = "";
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
    $selectmale ="";
    $selectfemale ="";
    $selectna="";
    if($gender == "Male"){
        $selectmale = "selected";
    }
    if($gender == "Female"){
        $selectfemale = "selected";
    }
    if($gender == "N/A"){
        $selectna = "selected";
    }
    // gender ends
    $selecttel ="";
    $selecteng ="";
    $selectkan="";
    $selecthin="";
    if($lang == "telugu"){
        $selecttel = "selected";
    }
    if($lang == "english"){
        $selecteng = "selected";
    }
    if($lang == "kannada"){
        $selectkan = "selected";
    }
    if($lang == "hindi"){
      $selecthin = "selected";
  }
  // lang select ends
  $selectcomp="";
  $selectele="";
  if($course == "computer science"){
      $selectcomp = "selected";
  }
  if($course == "electronics"){
      $selectele = "selected";
  }
  // centre select ends
  $selectnec="";
  $selectgtc="";
  $selectrntc = "";
  $selectttc = "";
  if($centre == "NEC"){
      $selectnec = "selected";
  }
  if($centre == "GTC"){
      $selectgtc = "selected";
  }
  if($centre == "RNTC"){
    $selectrntc = "selected";
}
if($centre == "TTC"){
  $selectttc = "selected";
}
    $output .='<div class="d-flex flex-row bd-highlight mb-3">
    <input type="number" value="'.$id.'" name="id" hidden>
    <div class="p-2 bd-highlight"><input type="text" value="'.$fname.'" name="fname" id="fname" placeholder="First Name" class="form-control" required></div>
    <div class="p-2 bd-highlight"><input type="text" value="'.$sname.'" name="sname" id="sname" placeholder="Last Name" class="form-control" required></div>
  </div>
  <label for="" class="mr-3">D.O.B</label>
  <input type="date" name="dob" id="dob" value="'.$dob.'" class="form-control-sm" width="70px" required>
  <label for=""class="mr-3 ml-2"> Gender</label>
  <select name="gender" id="gender" class="form-control-sm">
  <option disabled> Please Select </option>
  <option value="Male" '.$selectmale.'> Male </option>
  <option value="Female" '.$selectfemale.'> Female </option>
  <option value="N/A" '.$selectna.'> N/A </option>
  </select>
  <label for=""class="mr-3 ml-2">Language</label>
  <select name="lang" id="gender" class="form-control-sm" required>
  <option value="" disabled> Please Select </option>
<option  value="english" '.$selecteng.'> english </option>
<option value="telugu" '.$selecttel.'> telugu </option>
<option value="kannada" '.$selectkan.'> kannada </option>
<option value="hindi" '.$selecthin.'> hindi </option>
</select>
<br>
<div class="d-flex flex-row bd-highlight mb-3 mt-2">
    <div class="p-2 bd-highlight">
    <label for=""class="mr-3 ml-2">Father Name</label>
      <input type="text" name="faname" value="'.$fathername.'" id="fathername" placeholder="Father Name" class="form-control" required></div>
    <div class="p-2 bd-highlight">
    <label for=""class="mr-3 ml-2">Father no.</label>  
    <input type="number"  name="fno" id="fphno" value="'.$fathernumber.'" placeholder="father number" class="form-control" required></div>
  </div>
  <label for=""class="mr-3 ml-2">Address</label>  
    <input type="text"  name="address" id="address" value="'.$address.'" placeholder="Address" class="form-control" required>
    <div class="d-flex flex-row bd-highlight mb-3 mt-2">
    <div class="p-2 bd-highlight">
    <label for=""class="mr-3 ml-2">City</label>
      <input type="text" name="city" id="city" value="'.$city.'" placeholder="city" class="form-control" required></div>
    <div class="p-2 bd-highlight">
    <label for=""class="mr-3 ml-2">State</label>  
    <input type="text" max="10" name="state" id="state" value="'.$state.'" placeholder="state" class="form-control" required></div>
  </div>
  <label for=""class="mr-3 ml-2">Postal / Zip Code</label>  
    <input type="number"  name="zip" id="zip" value="'.$zip.'" placeholder="Postal / Zip Code" class="form-control" required>
    <div class="d-flex flex-row bd-highlight mb-3 mt-2">
    <div class="p-2 bd-highlight">
    <label for=""class="mr-3 ml-2">Email ID</label>
      <input type="email" name="email" id="email" value="'.$email.'"  placeholder="email" class="form-control" required></div>
    <div class="p-2 bd-highlight">
    <label for=""class="mr-3 ml-2">Phone No</label>  
    <input type="number"  name="mno" id="mno" placeholder="phone NO" value="'.$mno.'" class="form-control" required></div>
  </div>
  <label for=""class="mr-3 ml-2">Qualification</label>  
    <input type="text"  name="qual" id="qual" value="'.$qual.'" placeholder="Qualification" class="form-control" required>
    <label for=""class="mr-3 ml-2">Course</label>
  <select name="course" id="course" class="form-control-sm mt-2" required>
  <option value="" disabled> Please Select </option>
  <option value="computer science " '.$selectcomp.'> computer science </option>
    <option value="electronics" '.$selectele.'> electronics </option>
  </select>
  <label for=""class="mr-3 ml-2">Centre</label>
  <select name="centre" id="centre" class="form-control-sm mt-2" required>
  <option value="" disabled> Please Select </option>
  <option value="NEC" '.$selectnec.'>NEC</option>
    <option value="GTC" '.$selectgtc.'>GTC</option>
    <option value="TTC" '.$selectttc.'>TTC</option>
    <option value="RNTC" '.$selectrntc.'>RNTC</option>

  </select>
  <br>
  <input type="submit" value="Update Lead" name="submit"  class="btn btn-primary update">';
  }
  echo $output;
?>   