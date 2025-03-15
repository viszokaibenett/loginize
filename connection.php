<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $dbhost = "localhost"; // Ez lesz a szerver
    $dbuser = "root"; // Ez a default user
    $dbpassword = ""; // Nincs jelszó
    $dbname = "webprogramozas_db"; // Az adatbázis neve, amihez csatlakozunk

    if(!$con = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname)) // Azért ifezünk, hogy ha nem működne a kapcsolódás, akkor nyírja ki
    {
        die("failed to connect!");
    }
?>