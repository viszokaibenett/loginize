<?php
// Megnézzük, hogy a user be van-e jelentkezve
session_start();
    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles.css">
        <title>Loginize</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    </head>
    <body>
        <div id="loggedin">
            <h1>You've managed to log in, well done.</h1>    
            <br>
            <h2>Hello, <?php echo $user_data['user_name']; ?>!</h2>
            <br>
            <h2><a href="logout.php">Click here to log out</a></h2>
        </div>  
    </body>
</html>