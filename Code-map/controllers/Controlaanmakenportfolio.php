<?php


ob_start();

$paginatitel = "Project aanmaak beheer admin| ProcodeX";


require __DIR__ . '/DBverbinding.php';

require __DIR__ . '/../views/Layouts/Head.php';
require __DIR__ . '/../views/Layouts/Header.html';
require __DIR__ . '/../views/Layouts/Aanmakenportfolio.php';
require __DIR__ . '/../views/Layouts/Footer.html';

//dit code blok zorgt ervoor dat de informatie die iemand invult om een pagina te maken naar de database word gestuurd, vervolgens
// word deze persoon naar de portfolio pagina gestuurd zodat hij kan checken of het klopt //


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Titelpagina = $_POST["Titelpagina"];
    $Toelichting = $_POST["Toelichting"];

    

    $stmt = $conn->prepare("INSERT INTO Portfolio_projecten (Paginatitel, Toelichting, Aanmaak_datum) VALUES (:Paginatitel, :Toelichting, CURDATE())");
    $stmt->bindParam(':Paginatitel', $Titelpagina);
    $stmt->bindParam(':Toelichting', $Toelichting);

    $stmt->execute();
    header("Location: Controlportfolio.php");
    exit();

}

ob_end_flush();

?>