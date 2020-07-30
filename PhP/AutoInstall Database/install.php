<?php
require "config.php";

try {
    // Une creation seulement
    $connection = new PDO("mysql:host=$host", $username, $password, $options); 

    // Injection du SQL
    $sql = file_get_contents("data/init.sql");
    $connection->exec($sql);
    
    echo "La base de données et la table ont bien été crées.<br>";

    echo "<a href='public/index.php'>Accèder à l'application</a>";
} catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
}