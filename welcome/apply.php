<?php
include("../config/pdoconfig.php");
$sucess = '';
if(isset($_POST['submit'])){
  
  $fname = $_POST['fname'];
  $sname = $_POST['sname'];
  $dob = $_POST['dob'];
  $gender = $_POST['gender'];
  $lang = $_POST['lang'];
  $faname = $_POST['faname'];
  $fno = $_POST['fno'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $zip = $_POST['zip'];
  $email = $_POST['email'];
  $mno = $_POST['mno'];
  $qual = $_POST['qual'];
  $courses = $_POST['course'];
  $comment = $_POST['comment'];
  $social = $_POST['social'];
  $centre = $_POST['centre'];
  $query = "INSERT INTO `lead` ( `fname`, `sname`, `dob`, `gender`, `lang`, `fathername`, `fphno`, `address`, `city`, `state`, `zip`, `email`, `mobile no`, `qual`, `course`, `comments`,`verfication`,`social`,`centre`) VALUES ('$fname', '$sname', '$dob', '$gender', '$lang', '$faname', '$fno', '$address', '$city', '$state', '$zip', '$email', '$mno', '$qual', '$courses', '$comment','pending','$social','$centre')";
  $statement = $connection->prepare($query);
  $result = $statement->execute();
  if($result){
    $sucess = "<div class='alert alert-success'>Form Submitted</div>";
  }
}
   


?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html class="supernova"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="alternate" type="application/json+oembed" href="https://www.jotform.com/oembed/?format=json&amp;url=https%3A%2F%2Fform.jotform.com%2F211731189178460" title="oEmbed Form">
<link rel="alternate" type="text/xml+oembed" href="https://www.jotform.com/oembed/?format=xml&amp;url=https%3A%2F%2Fform.jotform.com%2F211731189178460" title="oEmbed Form">
<meta property="og:title" content="Course Registration Form" >
<meta property="og:url" content="https://form.jotform.com/211731189178460" >
<meta property="og:description" content="Please click the link to complete this form." >
<meta name="slack-app-id" content="AHNMASS8M">
<link rel="shortcut icon" href="https://cdn.jotfor.ms/favicon.ico">
<link rel="canonical" href="https://form.jotform.com/211731189178460" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=1" />
<meta name="HandheldFriendly" content="true" />
<title>Course Registration Form</title>
<link type="text/css" media="print" rel="stylesheet" href="https://cdn.jotfor.ms/css/printForm.css?3.3.26036" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?themeRevisionID=5eb3b4ae85bd2e1e2966db96"/>
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/payment/payment_styles.css?3.3.26036" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/payment/payment_feature.css?3.3.26036" />
<link rel="stylesheet" href="assets/css/apply.css">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<script src="https://cdn.jotfor.ms/js/vendor/jquery-1.8.0.min.js?v=3.3.26036" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/js/vendor/maskedinput.min.js?v=3.3.26036" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/js/vendor/jquery.maskedinput.min.js?v=3.3.26036" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/punycode/1.4.1/punycode.min.js"></script>
<script src="https://cdn.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/static/jotform.forms.js?3.3.26036" type="text/javascript"></script>
<script type="text/javascript">
	JotForm.init(function(){

 JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"];
 JotForm.calendarDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
 JotForm.calendarOther = {"today":"Today"};
 var languageOptions = document.querySelectorAll('#langList li'); 
 for(var langIndex = 0; langIndex < languageOptions.length; langIndex++) { 
   languageOptions[langIndex].on('click', function(e) { setTimeout(function(){ JotForm.setCalendar("47", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); }, 0); });
 } 
 JotForm.setCalendar("47", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""});
      JotForm.description('input_48', 'language you are comfortable with ');
if (window.JotForm && JotForm.accessible) $('input_49').setAttribute('tabindex',0);
      setTimeout(function() {
          $('input_49').hint('name ');
       }, 20);
      setTimeout(function() {
          $('input_50').hint('ex: 987654321');
       }, 20);
      setTimeout(function() {
          $('input_6').hint('ex: myname@example.com');
       }, 20);
      JotForm.setPhoneMaskingValidator( 'input_27_full', '(###) ###-####' );
if (window.JotForm && JotForm.accessible) $('input_14').setAttribute('tabindex',0);
      setTimeout(function() {
          $('input_14').hint(' sslc, 2nd pu etc');
       }, 20);
if (window.JotForm && JotForm.accessible) $('input_45').setAttribute('tabindex',0);
	JotForm.newDefaultTheme = true;
	JotForm.extendsNewTheme = false;
	JotForm.newPaymentUIForNewCreatedForms = false;
	JotForm.newPaymentUI = true;
    /*INIT-END*/
	});

   JotForm.prepareCalculationsOnTheFly([null,{"name":"clickTo","qid":"1","text":"Student Registration Form","type":"control_head"},null,{"name":"gender","qid":"3","text":"Gender","type":"control_dropdown"},null,null,{"name":"studentEmail6","qid":"6","subLabel":"example@example.com","text":"Student E-mail","type":"control_email"},null,null,null,null,null,null,null,{"description":"","name":"qualification","qid":"14","text":"Qualification ","type":"control_textbox"},null,null,null,null,null,{"name":"submit20","qid":"20","text":"Submit Application","type":"control_button"},null,null,{"name":"address","qid":"23","text":"Address","type":"control_address"},null,null,null,{"name":"mobileNumber","qid":"27","text":"Mobile Number","type":"control_phone"},null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,{"name":"clickTo45","qid":"45","text":"Additional Comments","type":"control_textarea"},{"name":"courses","qid":"46","text":"Courses","type":"control_dropdown"},{"description":"","name":"dateOf","qid":"47","text":"Date of Birth","type":"control_datetime"},{"description":"language you are comfortable with ","name":"language48","qid":"48","subLabel":"","text":"language ","type":"control_dropdown"},{"description":"","name":"fathersName","qid":"49","subLabel":"","text":"Father's name ","type":"control_textbox"},{"description":"","name":"fathersPh50","qid":"50","subLabel":"","text":"Father's ph no","type":"control_number"},{"description":"","name":"name","qid":"51","text":"Name","type":"control_fullname"}]);
   setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,{"name":"clickTo","qid":"1","text":"Student Registration Form","type":"control_head"},null,{"name":"gender","qid":"3","text":"Gender","type":"control_dropdown"},null,null,{"name":"studentEmail6","qid":"6","subLabel":"example@example.com","text":"Student E-mail","type":"control_email"},null,null,null,null,null,null,null,{"description":"","name":"qualification","qid":"14","text":"Qualification ","type":"control_textbox"},null,null,null,null,null,{"name":"submit20","qid":"20","text":"Submit Application","type":"control_button"},null,null,{"name":"address","qid":"23","text":"Address","type":"control_address"},null,null,null,{"name":"mobileNumber","qid":"27","text":"Mobile Number","type":"control_phone"},null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,{"name":"clickTo45","qid":"45","text":"Additional Comments","type":"control_textarea"},{"name":"courses","qid":"46","text":"Courses","type":"control_dropdown"},{"description":"","name":"dateOf","qid":"47","text":"Date of Birth","type":"control_datetime"},{"description":"language you are comfortable with ","name":"language48","qid":"48","subLabel":"","text":"language ","type":"control_dropdown"},{"description":"","name":"fathersName","qid":"49","subLabel":"","text":"Father's name ","type":"control_textbox"},{"description":"","name":"fathersPh50","qid":"50","subLabel":"","text":"Father's ph no","type":"control_number"},{"description":"","name":"name","qid":"51","text":"Name","type":"control_fullname"}]);}, 20); 
</script>
</head>
<body>
<form  method="post">
  <input type="hidden" name="formID" value="211731189178460" />
  <input type="hidden" id="JWTContainer" value="" />
  <input type="hidden" id="cardinalOrderNumber" value="" />
  <div role="main" class="form-all">
    <style>
      .form-all:before { background: none;}
    </style>
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-large">
          <div class="header-text httal htvam">
            <h1 id="header_1" class="form-header" data-component="header">
              Student Registration Form
            </h1>
            <div id="subHeader_1" class="form-subHeader">
              Fill out the form carefully for registration
            </div>
          </div>
        </div>
        <?php echo $sucess;?>
      </li>
      <li class="form-line jf-required" data-type="control_fullname" id="id_51">
        <label class="form-label form-label-top form-label-auto" id="label_51" for="first_51">
          Name
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_51" class="form-input-wide jf-required" data-layout="full">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
              <input type="text" id="first_51" name="fname" class="form-textbox validate[required]" size="10" value="" data-component="first" aria-labelledby="label_51 sublabel_51_first" required="" />
              <label class="form-sub-label" for="first_51" id="sublabel_51_first" style="min-height:13px" aria-hidden="false"> First Name </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="last">
              <input type="text" id="last_51" name="sname" class="form-textbox validate[required]" size="15" value="" data-component="last" aria-labelledby="label_51 sublabel_51_last" required="" />
              <label class="form-sub-label" for="last_51" id="sublabel_51_last" style="min-height:13px" aria-hidden="false"> Last Name </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_datetime" id="id_47">
        <label class="form-label form-label-top form-label-auto" id="label_47" for="lite_mode_47">
          Date of Birth
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_47" class="form-input-wide jf-required" data-layout="half">
          <div data-wrapper-react="true">
            <div style="display:none">
              <span class="form-sub-label-container" style="vertical-align:top">
                <!-- <input type="tel" class="form-textbox validate[required, limitDate]" id="month_47" name="q47_dateOf[month]" size="2" data-maxlength="2" data-age="" maxLength="2" value="" required="" autoComplete="off" aria-labelledby="label_47 sublabel_47_month" /> -->
                <span class="date-separate" aria-hidden="true">
                   -
                </span>
                
            </div>
            <span class="form-sub-label-container" style="vertical-align:top">
              <input type="text" name="dob" class="form-textbox validate[required, limitDate, validateLiteDate]" id="lite_mode_47" size="12" data-maxlength="12" maxLength="12" data-age="" value="" required="" data-format="mmddyyyy" data-seperator="-" placeholder="MM-DD-YYYY" autoComplete="off" aria-labelledby="label_47 sublabel_47_litemode" />
              <img class=" newDefaultTheme-dateIcon icon-liteMode" alt="Pick a Date" id="input_47_pick" src="https://cdn.jotfor.ms/images/calendar.png" data-component="datetime" aria-hidden="true" data-allow-time="No" data-version="v2" />
              <label class="form-sub-label" for="lite_mode_47" id="sublabel_47_litemode" style="min-height:13px" aria-hidden="false"> Date </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1 jf-required" data-type="control_dropdown" id="id_3">
        <label class="form-label form-label-top" id="label_3" for="input_3">
          Gender
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_3" class="form-input-wide jf-required" data-layout="half">
          <select class="form-dropdown validate[required]" id="input_3" name="gender" style="width:310px" data-component="dropdown" required="">
            <option disabled> Please Select </option>
            <option value="Male"> Male </option>
            <option value="Female"> Female </option>
            <option value="N/A"> N/A </option>
          </select>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_dropdown" id="id_48">
        <label class="form-label form-label-top form-label-auto" id="label_48" for="input_48">
          language
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_48" class="form-input-wide jf-required" data-layout="half">
          <select class="form-dropdown validate[required]" id="input_48" name="lang" style="width:310px" data-component="dropdown" required="">
            <option value="" disabled> Please Select </option>
            <option selected="" value="english"> english </option>
            <option value="telugu"> telugu </option>
            <option value="kannada"> kannada </option>
            <option value="hindi"> hindi </option>
          </select>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_textbox" id="id_49">
        <label class="form-label form-label-top form-label-auto" id="label_49" for="input_49">
          Father's name
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_49" class="form-input-wide jf-required" data-layout="half">
          <input type="text" id="input_49" name="faname" data-type="input-textbox" class="form-textbox validate[required]" style="width:310px" size="310" value="" placeholder="name " data-component="textbox" aria-labelledby="label_49" required="" />
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_number" id="id_50">
        <label class="form-label form-label-top form-label-auto" id="label_50" for="input_50">
          Father's ph no
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_50" class="form-input-wide jf-required" data-layout="half">
          <input type="number" id="input_50" name="fno" data-type="input-number" class=" form-number-input form-textbox validate[required]" style="width:310px" size="310" value="" placeholder="ex: 987654321" data-component="number" aria-labelledby="label_50" required="" step="any" />
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_address" id="id_23">
        <label class="form-label form-label-top form-label-auto" id="label_23" for="input_23_addr_line1">
          Address
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_23" class="form-input-wide jf-required" data-layout="full">
          <div summary="" class="form-address-table jsTest-addressField">
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span class="form-address-line form-address-street-line jsTest-address-lineField">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" id="input_23_addr_line1" name="address" class="form-textbox validate[required] form-address-line" value="" data-component="address_line_1" aria-labelledby="label_23 sublabel_23_addr_line1" required="" />
                  <label class="form-sub-label" for="input_23_addr_line1" id="sublabel_23_addr_line1" style="min-height:13px" aria-hidden="false"> Street Address </label>
                </span>
              </span>
            </div>
            
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span class="form-address-line form-address-city-line jsTest-address-lineField ">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" id="input_23_city" name="city" class="form-textbox validate[required] form-address-city" value="" data-component="city" aria-labelledby="label_23 sublabel_23_city" required="" />
                  <label class="form-sub-label" for="input_23_city" id="sublabel_23_city" style="min-height:13px" aria-hidden="false"> City </label>
                </span>
              </span>
              <span class="form-address-line form-address-state-line jsTest-address-lineField ">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" id="input_23_state" name="state" class="form-textbox validate[required] form-address-state" value="" data-component="state" aria-labelledby="label_23 sublabel_23_state" required="" />
                  <label class="form-sub-label" for="input_23_state" id="sublabel_23_state" style="min-height:13px" aria-hidden="false"> State / Province </label>
                </span>
              </span>
            </div>
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span class="form-address-line form-address-zip-line jsTest-address-lineField ">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" id="input_23_postal" name="zip" class="form-textbox validate[required] form-address-postal" value="" data-component="zip" aria-labelledby="label_23 sublabel_23_postal" required="" />
                  <label class="form-sub-label" for="input_23_postal" id="sublabel_23_postal" style="min-height:13px" aria-hidden="false"> Postal / Zip Code </label>
                </span>
              </span>
            </div>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1 jf-required" data-type="control_email" id="id_6">
        <label class="form-label form-label-top" id="label_6" for="input_6">
          Student E-mail
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_6" class="form-input-wide jf-required" data-layout="half">
          <span class="form-sub-label-container" style="vertical-align:top">
            <input type="email" id="input_6" name="email" class="form-textbox validate[required, Email]" style="width:310px" size="310" value="" placeholder="ex: myname@example.com" data-component="email" aria-labelledby="label_6 sublabel_input_6" required="" />
            <label class="form-sub-label" for="input_6" id="sublabel_input_6" style="min-height:13px" aria-hidden="false"> example@example.com </label>
          </span>
        </div>
      </li>
      <li class="form-line form-line-column form-col-2 jf-required" data-type="control_phone" id="id_27">
        <label class="form-label form-label-top" id="label_27" for="input_27_full">
          Mobile Number
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_27" class="form-input-wide jf-required" data-layout="half">
          <span class="form-sub-label-container" style="vertical-align:top">
            <input type="tel" id="input_27_full" name="mno" data-type="mask-number" class="mask-phone-number form-textbox validate[required, Fill Mask]" style="width:310px" data-masked="true" value="" placeholder="(000) 000-0000" data-component="phone" aria-labelledby="label_27" required="" />
            <label class="form-sub-label is-empty" for="input_27_full" id="sublabel_27_masked" style="min-height:13px" aria-hidden="false">  </label>
          </span>
        </div>
      </li>
      <li class="form-line form-line-column form-col-3 jf-required" data-type="control_textbox" id="id_14">
        <label class="form-label form-label-top" id="label_14" for="input_14">
          Qualification
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_14" class="form-input-wide jf-required" data-layout="half">
          <input type="text" id="input_14" name="qual" data-type="input-textbox" class="form-textbox validate[required]" style="width:310px" size="310" value="" placeholder=" sslc, 2nd pu etc" data-component="textbox" aria-labelledby="label_14" required="" />
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_dropdown" id="id_46">
        <label class="form-label form-label-top form-label-auto" id="label_46" for="input_46">
          Courses
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_46" class="form-input-wide jf-required" data-layout="half">
          <select class="form-dropdown validate[required]" id="input_46" name="course" style="width:310px" data-component="dropdown" required="">
            <option value="" disabled> Please Select </option>
            <option value="computer science "> computer science </option>
            <option value="electronics"> electronics </option>
          </select>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_dropdown" id="id_46">
        <label class="form-label form-label-top form-label-auto" id="label_46" for="input_46">
          Centre
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_46" class="form-input-wide jf-required" data-layout="half">
          <select class="form-dropdown validate[required]" id="" name="centre" style="width:310px" data-component="dropdown" required="">
            <option value="" disabled> Please Select </option>
            <option value="NEC"> NEC</option>
            <option value="GTC"> GTC </option>
            <option value="RNTC">RNTC</option>
            <option value="TTC">TTC</option>
          </select>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_dropdown" id="id_46">
        <label class="form-label form-label-top form-label-auto" id="label_46" for="input_46">
          GOT THIS
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_46" class="form-input-wide jf-required" data-layout="half">
          <select class="form-dropdown validate[required]" id="" name="social" style="width:310px" data-component="dropdown" required="">
            <option value="" disabled> Please Select </option>
            <option value="facebook"> FaceBook</option>
            <option value="twitter"> Twitter </option>
            <option value="google">Google</option>
            <option value="others">Others</option>
          </select>
        </div>
      </li>
      <li class="form-line" data-type="control_textarea" id="id_45">
        <label class="form-label form-label-top form-label-auto" id="label_45" for="input_45"> Additional Comments </label>
        <div id="cid_45" class="form-input-wide" data-layout="full">
          <textarea id="summernote" class="form-textarea" name="comment" style="width:648px;height:163px" data-component="textarea" aria-labelledby="label_45"></textarea>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1" data-type="control_button" id="id_20">
        <div id="cid_20" class="form-input-wide" data-layout="full">
          <div data-align="left" class="form-buttons-wrapper form-buttons-left   jsTest-button-wrapperField">
            <button id="input_20" name="submit" type="submit" class="form-submit-button submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">
              Submit Application
            </button>
            <a href="./index.html" class='btn btn-danger ml-2'>Back</a>
          </div>
          
        </div>
      </li>
      <li style="clear:both">
      </li>
      <li style="display:none">
        Should be Empty:
        <input type="text" name="website" value="" />
      </li>
    </ul>
  </div>

</form></body>
</html>
<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script src="https://cdn.jotfor.ms//js/errorNavigation.js?v=3.3.26036"></script>
