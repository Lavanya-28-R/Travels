<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>email</title>
</head>
<body>
    <form action="sendemails.php" method="post">
        <input type="text" placeholder="name" name="name"><br>
        <input type="email" placeholder="email" name="email"><br>
        <input type="submit" placeholder="submit" name="submit"><br>
    </form>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
require 'PHPMailer/PHPMailerAutoload.php';
$name = $_POST['name'];
$email = $_POST['email'];


$mail = new PHPMailer;

$mail->SMTPDebug = 4;


    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'lavanyarediee2001@gmail.com';                     //SMTP username
    $mail->Password   = 'secret';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('lavanyarediee2001@gmail.com', 'Test Email');
    $mail->addAddress('lavanyarediee2001@gmail.com', 'Lavanya');     //Add a recipient
    //$mail->addAddress('ellen@example.com');               //Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true); 
                                     //Set email format to HTML
    $mail->Subject = 'sample mail';
    $mail->Body    = 'Name : ' .$name . 'Email: ' .$email;
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if(!$mail->send()) {
        echo 'Message could not been sent';
        echo " Mailer Error: $mail->ErrorInfo";

    }
 
else{
    echo "Message has ben sent";
}
}

?>
