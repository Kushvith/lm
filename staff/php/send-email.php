<?php
   include('../../config/pdoconfig.php');
   session_start();
   $alert="";
            use PHPMailer\PHPMailer\PHPMailer;

            require_once 'phpmailer/Exception.php';
            require_once 'phpmailer/PHPMailer.php';
            require_once 'phpmailer/SMTP.php';
            $mail = new PHPMailer(true);
    $staff = $_SESSION['email'];        
   $name = $_POST['text'];
   $email = $_POST['email'];
  
   
        try{
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'harisaketh2003@gmail.com'; // Gmail address which you want to use as SMTP server
            $mail->Password = 'Saketh@123'; // Gmail address Password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = '587';
        
            $mail->setFrom($email); // Gmail address which you used as SMTP server
            $mail->addAddress($email); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)
        
            $mail->isHTML(true);
            $mail->Subject = 'Message From Lead Management';
            $mail->Body = "<h3>Announcement from lead Management <b>$staff</b> <br> 
            Email : $email<br>
            $name
            </h3>";
        
            $mail->send();
            $alert =  "success";
          } catch (Exception $e){
            $alert = '<div class="alert alert-danger">
                        <span>'.$e->getMessage().'</span>
                      </div>';
                      
          }
          $alert = 'done';

   echo $alert;
?>