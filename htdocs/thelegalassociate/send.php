<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


if(isset($_POST['send']))
{
        $subject  = $_POST['subject'];
        $name  = $_POST['name'];
        $address  = $_POST['address'];
        $mobile  = $_POST['mobile'];
        $email  = $_POST['email'];
        $date  = $_POST['date'];




//Load Composer's autoloader
require 'PHPMailer\Exception.php';
require 'PHPMailer\PHPMailer.php';
require 'PHPMailer\SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'thelegalassociate0@gmail.com';                     //SMTP username
    $mail->Password   = 'hoektfocqraflgul';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('thelegalassociate0@gmail.com', 'Book Appointment');
    $mail->addAddress('thelegalassociate0@gmail.com', 'The Legal Associate');     //Add a recipient
    

    
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Book Appointment';
    $mail->Body    = "<li><b>Sender Subject</b> - $subject </li><li><b>Sender Name</b> - $name</li> <li><b>Sender Address</b> - $address </li><li><b>Sender Mobile</b> - $mobile</li><li> <b>Sender Email</b> - $email</li><li> <b>Sender Date</b> - $date</li>";

    $mail->send();
    echo "<div class='success'> Message Has Been Sent!</div>";
} catch (Exception $e) {
    echo "<div class='alert'> Message Could't Sent!</div>";
}









}




    
    
    
    
?>
