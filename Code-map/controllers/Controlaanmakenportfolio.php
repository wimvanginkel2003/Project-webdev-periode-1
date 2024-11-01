<?php

$paginatitel = "Project aanmaak beheer admin| ProcodeX";


require __DIR__ . '/DBverbinding.php';

require __DIR__ . '/../views/Layouts/Head.php';
require __DIR__ . '/../views/Layouts/Header.html';
require __DIR__ . '/../views/Layouts/Aanmakenportfolio.html';
require __DIR__ . '/../views/Layouts/Footer.html';



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titelpagina = $_POST["titelpagina"];
    $projectbeschrijving = $_POST["Projectbeschrijving"];

    

    $stmt = $conn->prepare("INSERT INTO Portfolio_projecten (Paginatitel, Projectitel) VALUES (:Paginatitel, :Projectitel)");
    $stmt->bindParam(':Paginatitel', $titelpagina);
    $stmt->bindParam(':Projectitel', $projectbeschrijving);

    $stmt->execute();
}

?>