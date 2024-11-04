<?php

ob_start();

//        Deze functie zorgt aan de hand van de ID dat de juiste content uit de database word gehaald en vervolgens word ingeladen in de input velden//

        require __DIR__ . '/DBverbinding.php';

        if (isset($params['id'])) {

            $id = (int)$params['id'];

            $sql = ("SELECT Paginatitel, Toelichting FROM Portfolio_projecten WHERE id = :id");
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();

            $inputpagina = $stmt->fetch(PDO::FETCH_ASSOC);

        }




$paginatitel = "Project verwijderen of updaten admin| ProcodeX";

require __DIR__ . '/../views/Layouts/Head.php';
require __DIR__ . '/../views/Layouts/Header.html';
require __DIR__ . '/../views/Layouts/updateofdelete.php';
require __DIR__ . '/../views/Layouts/Footer.html';



//dit code blok zorgt ervoor dat een project pagina word geupdate of word verwijderd//
// vervolgens word deze persoon naar de portfolio pagina gestuurd zodat hij kan checken of zijn
// update zo is als hij wil en in het geval hij een pagina heeft verwijderd kan hij checken of deze verwijderd is //


if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $updateofdelete = $_POST["Typeknop"];

    if ($updateofdelete == "Update") {

                    $Titelpagina = $_POST["Titelpagina"];
                    $Toelichting = $_POST["Toelichting"];
                    $id = $_POST['id'];


                    $stmt = $conn->prepare("UPDATE Portfolio_projecten SET Paginatitel = :Paginatitel, Toelichting = :Toelichting WHERE ID = :id");
                    $stmt->bindParam(':Paginatitel', $Titelpagina);
                    $stmt->bindParam(':Toelichting', $Toelichting);
                    $stmt->bindParam(':id', $id,);

                    if ($stmt->execute()) {
                        header("Location: Controlportfolio.php");
                        exit();
                    } else {
                        echo "Update mislukt";
                    }


    } elseif ($updateofdelete == "Delete") {

                $id = $_POST['id'];
                $stmt = $conn->prepare("DELETE FROM Portfolio_projecten WHERE ID = :id");
                $stmt->bindParam(':id', $id,);


                if ($stmt->execute()) {
                    header("Location: Controlportfolio.php");
                    exit();
                } else {
                    echo "Delete mislukt";
                }

    }
}




ob_end_flush();



?>