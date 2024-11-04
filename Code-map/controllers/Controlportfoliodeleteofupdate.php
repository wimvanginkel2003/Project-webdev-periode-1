<?php
ob_start();

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



//dit code blok zorgt ervoor dat de datbase word geupdate, moet even een verscil worden gemaakt tussen delete en update//


if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $updateofdelete = $_POST["Typeknop"];

    if ($updateofdelete == "Update") {

                    $Titelpagina = $_POST["Titelpagina"];
                    $Toelichting = $_POST["Toelichting"];
                    $id = $_POST['id'];

                    var_dump($Titelpagina, $Toelichting, $id);


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
                $stmt->bindParam(':id', $id, PDO::PARAM_INT); // Zorg ervoor dat je PDO::PARAM_INT gebruikt


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