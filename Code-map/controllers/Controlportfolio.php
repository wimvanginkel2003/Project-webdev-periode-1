<?php

require __DIR__ . '/DBverbinding.php';


//dit code blok haalt informatie uit de database om een sectie te maken op de portfolio pagina//


$sql = "SELECT ID, Paginatitel From Portfolio_projecten;";
$stmt = $conn->prepare($sql);
$stmt->execute();

$inputsecties = $stmt->fetchAll(PDO::FETCH_ASSOC);



$paginatitel = "Portfolio | ProcodeX";

require __DIR__ . '/../views/Layouts/Head.php';
require __DIR__ . '/../views/Layouts/Header.html';
require __DIR__ . '/../views/Layouts/Portfolio.php';
require __DIR__ . '/../views/Layouts/Footer.html';

?>