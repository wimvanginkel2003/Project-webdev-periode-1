<?php


require __DIR__ . '/DBverbinding.php';

if (isset($params['id'])) {

    $id = (int)$params['id'];

    var_dump(gettype($id));



    $sql = ("SELECT Paginatitel, Projectitel FROM Portfolio_projecten WHERE id = :id");
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    $contentpagina = $stmt->fetch(PDO::FETCH_ASSOC);



}



$paginatitel = "Project | ProcodeX";

require __DIR__ . '/../views/Layouts/Head.php';
require __DIR__ . '/../views/Layouts/Header.html';
require __DIR__ . '/../views/Layouts/Detailproject.php';
require __DIR__ . '/../views/Layouts/Footer.html';

?>