<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Contact Form</title>
</head>

<body>
    <form action="contacttt.php" method="post">

        <label for="Name">Name:</label><br>
        <input type="text" id="Name" name="Name" required><br>
        <label for="Email">Email:</label><br>
        <input type="email" id="Email" name="Email" required><br>
 
        
        <label for="Message">Message:</label><br>
        <textarea id="Message" name="Message" rows="4" cols="50" required></textarea><br>
        <input type="submit" value="Submit">

    </form>
</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["Name"];
    $email = $_POST["Email"];

    $message = $_POST["Message"];

    // Validate email address
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email address";
        exit();
    }

    // Send email
    $to = "lavanyarediee2001@gmail.com";
    $subject = "New contact form submission";
    $headers = "From: $email";
    if (mail($to, $subject,  $message, $headers)) {
        echo "Email sent successfully";
    } else {
        echo "Error sending email";
    }
}

?>