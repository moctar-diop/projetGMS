<?php 
    // Enable us to use Headers
    ob_start();
    // Set sessions
    if(!isset($_SESSION)) {
        session_start();
    }
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "gms221";
    
    $connection = mysqli_connect($hostname, $username, $password, $dbname) or die("La connexion a la base de donnee n'est pas retablit");
?>