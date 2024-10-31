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
    $afbeelding1 = $_POST["afbeelding1"];
    $afbeelding2 = $_POST["afbeelding2"];
    $afbeelding3 = $_POST["afbeelding3"];
    $afbeelding4 = $_POST["afbeelding4"];

    

    $stmt = $conn->prepare("INSERT INTO Portfolio_projecten (Paginatitel, Projectitel, Afbeelding1, Afbeelding2, Afbeelding3, Afbeelding4) VALUES (:Paginatitel, :Projectitel, :Afbeelding1, :Afbeelding2, :Afbeelding3, :Afbeelding4)");
    $stmt->bindParam(':Paginatitel', $titelpagina);
    $stmt->bindParam(':Projectitel', $projectbeschrijving);
    $stmt->bindParam(':Afbeelding1', $afbeelding1);
    $stmt->bindParam(':Afbeelding2', $afbeelding2);
    $stmt->bindParam(':Afbeelding3', $afbeelding3);
    $stmt->bindParam(':Afbeelding4', $afbeelding4);

    $stmt->execute();
}

?>