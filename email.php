<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>email</title>
</head>
<body>
    <form action="post">

        <input type="email" placeholder="email" name="email"><br>
        <input type="submit" value="submit" name="submit"><br>
    </form>
</body>
</html>

<?php
 if(isset($_POST['submit'])){
    $email=$_POST['email'];
    smtp_mailer($email, test, "thank ")

    function smtp_mailer($to, $subject, $msg){
        require_once("smptp/PHPMailerAutoload.php");
        $mail = new PHPMailer;

          //$mail->SMTPDebug h 4;


    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'lavanyarediee2001@gmail.com';                     //SMTP username
    $mail->Password   = 'Rediee30!';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587; 
    $mail->CharSet = 'UTF-8'; 
    $mail->Username = 'email';
    $mail->setFrom('lavanyarediee2001@gmail.com', 'Test Email');
    $mail->addAddress('lavanyarediee2001@gmail.com', 'Lavanya');
    $mail->Subject = 'sample mail';
    $mail->Body    =  'Email: ' .$email;
    if(!$mail->send()) {
        echo 'Message could not been sent';
        echo " Mailer Error: $mail->ErrorInfo";

    }
 
else{
    echo "Message has ben sent";
}
}

    }

    
?>