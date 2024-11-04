<?php

$paginatitel = "Project aanmaak beheer admin| ProcodeX";


require __DIR__ . '/DBverbinding.php';

require __DIR__ . '/../views/Layouts/Head.php';
require __DIR__ . '/../views/Layouts/Header.html';
require __DIR__ . '/../views/Layouts/Aanmakenportfolio.php';
require __DIR__ . '/../views/Layouts/Footer.html';



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Titelpagina = $_POST["Titelpagina"];
    $Toelichting = $_POST["Toelichting"];

    

    $stmt = $conn->prepare("INSERT INTO Portfolio_projecten (Paginatitel, Toelichting, Aanmaak_datum) VALUES (:Paginatitel, :Toelichting, CURDATE())");
    $stmt->bindParam(':Paginatitel', $Titelpagina);
    $stmt->bindParam(':Toelichting', $Toelichting);

    $stmt->execute();

}

?>