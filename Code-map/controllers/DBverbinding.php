<?php

$servername = "localhost";
$username = "root";
$password = "wachtwoord";

try {
    $conn = new PDO("mysql:host=$servername;dbname=ProcodeX", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Verbinding succesvol!";

} catch (PDOException $e) {

    echo "Verbinding niet gelukt" . $e->getMessage();}


?>