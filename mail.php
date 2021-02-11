<?php
// require "PHPMailer/PHPMailerAutoload.php";
use PHPMailer\src\Exception;
use PHPMailer\PHPMailer\PHPMailer;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
function smtpmailer($to, $from, $from_name, $subject, $body)
    {
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true; 
 
        $mail->SMTPSecure = 'SMTP'; 
        $mail->Host = 'smtp.hostinger.in';
        $mail->Port = 587;  
        $mail->Username = 'support@softezi.in';
        $mail->Password = 'SoftEzi@123';   
   
   //   $path = 'reseller.pdf';
   //   $mail->AddAttachment($path);
   
        $mail->IsHTML(true);
        $mail->From="support@softezi.in";
        $mail->FromName=$from_name;
        $mail->Sender=$from;
        $mail->AddReplyTo($from, $from_name);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AddAddress($to);
        if(!$mail->Send())
        {
            $error ="Please try Later, Error Occured while Processing...";
            return $error; 
        }
        else 
        {
            $error = "Thanks You !! Your email is sent.";  
            return $error;
        }
    }
    if(isset($_POST['contactform'])){
      $name=$_POST['name'];
      $last_name=$_POST['last_name'];
      $email=$_POST['email'];
      $phone=$_POST['phone'];
      $company=$_POST['company'];
      $country=$_POST['country'];
      $interest=$_POST['interest'];
      $description=$_POST['description'];
    $to='support@softezi.in';
    $from=$email;
    $name= $name." ".$last_name;
    $subj = $company;
   $msg = $description."<br>Interested:-".$interest."<br>Phone:-".$phone."<br>Company:-".$company; 
    $error=smtpmailer($to,$from, $name ,$subj, $msg);
    
    }
?>