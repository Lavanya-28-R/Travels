<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <form method="post" action="log in.php">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <input type="submit" onclick="auth()" value="sign in">
    </form>
    <script>
        function auth(){
			var username=document.getElementById("username").value;
			var password=document.getElementById("password").value;
			if (username == "admin" && password == "123456") {
				window.location.assign ("Admin_Panel.php");
				alert ("Login Succesfully");
			}
			else{
				alert ("Invalid Information");
				return;
			}
		}
		</script>
</body>
</html>


<?php
// Your existing login logic

// Assuming successful login
if (isset($_POST['sign in'])) {
    // Redirect to the next page
    header("Location: connection.php");
    exit();
} else {
    echo "error";

    // Display an error message or handle the error as per your existing logic
}
?>

