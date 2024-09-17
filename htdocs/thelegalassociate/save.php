
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


if(isset($_POST['send']))
{
        
        $name  = $_POST['name'];
        $address  = $_POST['address'];
        $query  = $_POST['query'];
        $email  = $_POST['email'];
        $mobile  = $_POST['mobile'];
        $message  = $_POST['message'];




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
    $mail->setFrom('thelegalassociate0@gmail.com', 'Free Advice');
    $mail->addAddress('thelegalassociate0@gmail.com', 'The Legal Associate');     //Add a recipient
    

    
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Free Advice';
    $mail->Body    = "<li><b>Sender Name</b> - $name</li> <li><b>Sender Address</b> - $address </li><li><b>Sender Query</b> - $query </li><li> <b>Sender Email</b> - $email</li><li><b>Sender Mobile</b> - $mobile</li><li> <b>Sender Message</b> - $message</li>";

    $mail->send();
    echo "<div class='success'> Message Has Been Sent!</div>";
} catch (Exception $e) {
    echo "<div class='alert'> Message Could't Sent!</div>";
}









}




    
    
    
    
?>

    
    
    
    
    