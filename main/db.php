<?php

$username = 'root';
$password = '';

    $dsn = 'mysql:host=localhost;dbname=gms221';

    try {
        $connexion = new PDO($dsn, $username, $password);
        // echo "Connexion bien établie <br>";
    } catch (\Throwable $th) {
        echo "Erreur base de donnée introuvable" . $th->getMessage();
    }


?>