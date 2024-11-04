<?php


require __DIR__ . '/DBverbinding.php';

//dit code blok zorgt ervoor dat de informatie die iemand invult om een pagina te maken naar de database word gestuurd, vervolgens
// word deze persoon naar de portfolio pagina gestuurd zodat hij kan checken of het klopt //



if (isset($params['id'])) {

    $id = (int)$params['id'];



    $sql = ("SELECT Paginatitel, Toelichting, Aanmaak_datum FROM Portfolio_projecten WHERE id = :id");
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    $contentpagina = $stmt->fetch(PDO::FETCH_ASSOC);



    if (!empty($contentpagina['Aanmaak_datum'])) {

        $pubdatum = $contentpagina['Aanmaak_datum'];
        $splitsenonderdelen = explode("-", $pubdatum);
        $datumgoed = $splitsenonderdelen[2] . - $splitsenonderdelen[1] . "-" . $splitsenonderdelen[0];

    } else { $datumgoed = "Geen datum beschikbaar"; } }



$paginatitel = "Project | ProcodeX";

require __DIR__ . '/../views/Layouts/Head.php';
require __DIR__ . '/../views/Layouts/Header.html';
require __DIR__ . '/../views/Layouts/Detailproject.php';
require __DIR__ . '/../views/Layouts/Footer.html';

?>