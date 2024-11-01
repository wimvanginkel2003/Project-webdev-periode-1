<?php
ob_start();

require __DIR__ . '/DBverbinding.php';

if (isset($params['id'])) {

    $id = (int)$params['id'];

    $sql = ("SELECT Paginatitel, Projectitel FROM Portfolio_projecten WHERE id = :id");
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

                    $titelpagina = $_POST["titelpagina"];
                    $projectbeschrijving = $_POST["Projectbeschrijving"];
                    $id = $_POST['id'];

                    var_dump($titelpagina, $projectbeschrijving, $id);


                    $stmt = $conn->prepare("UPDATE Portfolio_projecten SET Paginatitel = :Paginatitel, Projectitel = :Projectitel WHERE ID = :id");
                    $stmt->bindParam(':Paginatitel', $titelpagina);
                    $stmt->bindParam(':Projectitel', $projectbeschrijving);
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