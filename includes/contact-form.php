<?php

require("PHPMailer/src/PHPMailer.php");
require("PHPMailer/src/SMTP.php");

$mail = new PHPMailer\PHPMailer\PHPMailer();

 $string = file_get_contents("config.json");
 $option = json_decode($string);

 define("MAIL_HOST", $option->MAIL_HOST);
 define("MAIL_ID", $option->MAIL_ID);
 //define("MAIL_PASSWORD", $option->MAIL_PASSWORD);

if( isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = nl2br($_POST['message']);
    $phonenumber = nl2br($_POST['phonenumber']);

    try {
        //Server settings
        $mail->SMTPDebug = 2;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = MAIL_HOST;  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = MAIL_ID;                 // SMTP username
        $mail->Password = 'dhanafam';                           // SMTP password
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;                                    // TCP port to connect to
    
        //Recipients
        $mail->setFrom(MAIL_ID, $name);
        $mail->addAddress(MAIL_ID, 'As you wish');     // Add a recipient
        //$mail->addAddress('ellen@example.com');               // Name is optional
        //$mail->addReplyTo('info@example.com', 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');
    
        //Attachments
       // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    
        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Message from '.$name.'  '.$phonenumber;
        $mail->Body    = $msg;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        // $a= print_r($mail,true);
        // echo $a;
        $mail->send();
        //header("Location: http://localhost/new_asyouwish/contact.php"); /* Redirect browser */
        exit();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }

};
?>