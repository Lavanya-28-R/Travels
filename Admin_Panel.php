<?php
session_start();
if(!isset($_SESSION['AdminLoginId']))
    {
        
        header("location:Admin_Login.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>
    <head>
        

<body>
    <style>
body{
            margin:0px;
        }
        div.header{
            font-family: poppins;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0px 60px;
            background-color: blueviolet;
        }
        .div.header button{
            background-color: black;
            font-size: 16px;
            font-weight: 550;
            padding: 8px 12px;
            border:2px solid blue;
            border-radius: 5px;
        }
        </style>
        </head>
    <h1> WELCOME TO ADMIN PANEL -<?php echo $_SESSION['AdminLoginId']?> </h1>
    <form>
    <button name="logout"> LOG OUT </button>
    </form>

    <?php
    if(isset($_POST['Logout']))
    {
        session_destroy();
        header("location:login.php");
    }
    ?>

</body>
</html>