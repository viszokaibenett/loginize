<?php
// Megnézzük, hogy a user be van-e jelentkezve
session_start();

    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        // Valami posztolva lett
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        // Megnézzük, hogy üresek-e a beküldött adatok
        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {
            // Elmentjük az adatbázisba
            $user_id = random_num(20); // Generálunk egy random számot user id-nek
            $query = "insert into users (user_id, user_name, password) values ('$user_id', '$user_name', '$password')";

            mysqli_query($con, $query); 

            header("Location: login.php");
            die;
        } 
        else 
        {
            echo "Please enter a valid information!";
        }
    }
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
        <div id="box">
            <form method="POST">
                <h1>Signup</h1>
                <input id="text" type="text" name="user_name"><br><br>
                <input id="text" type="password" name="password"><br><br>
                <input id="button" type="submit" value="Signup"><br><br>
                <a href="login.php">Login</a>
            </form>
        </div>
    </body>
</html>