<?php
ob_start();

$paginatitel = "Contact | ProcodeX";

require __DIR__ . '/../views/Layouts/Head.php';
require __DIR__ . '/../views/Layouts/Header.html';
require __DIR__ . '/../views/Layouts/Contact.html';
require __DIR__ . '/../views/Layouts/Footer.html';

require __DIR__ . '/DBverbinding.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Naam = $_POST["Naam"];
    $Email = $_POST["Email"];
    $Telefoonnummer = $_POST["Telefoonnummer"];
    $Aanvullende_informatie = $_POST["Aanvullende_info"];


    $stmt = $conn->prepare("INSERT INTO ProcodeX_Contacten (Naam, Telefoonnummer, Email, Aanvullende_informatie) VALUES (:Naam, :Telefoonnummer, :Email, :Aanvullende_informatie)");
    $stmt->bindParam(':Naam', $Naam);
    $stmt->bindParam(':Email', $Email);
    $stmt->bindParam(':Telefoonnummer', $Telefoonnummer);
    $stmt->bindParam(':Aanvullende_informatie', $Aanvullende_informatie);

    $stmt->execute();
    header("Location: Controlbedank.php");
    exit();

}

ob_end_flush();

?>