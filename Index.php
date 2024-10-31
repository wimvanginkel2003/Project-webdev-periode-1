<?php


$request_Page = $_SERVER['REQUEST_URI'];

switch ($request_Page) {
    default:
        require "Code-map/controllers/Controlhome.php";
        break;
    case "/home":
        include "Code-map/controllers/Controlhome.php";
        break;
    case "/contact":
        include "Code-map/controllers/Controlcontact.php";
        break;
    case "/portfolio":
        include "Code-map/controllers/Controlportfolio.php";
        break;
    case "/project":
        include "Code-map/controllers/Controldetailportfolio.php";
        break;
    case "/over-ons":
        include "Code-map/controllers/Controloverons.php";
        break;
    case "/admin":
        include "Code-map/controllers/Controlportfoliobeheer.php";
        break;
    case "/admin-project-pagina-aanmaken":
        include "Code-map/controllers/Controlaanmakenportfolio.php";
        break;
    case "/admin-project-pagina-bewerken":
        include "Code-map/controllers/Controlportfoliodeleteofupdate.php";
        break;
    case "/bedank-pagina":
        include "Code-map/controllers/Controlbedank.php";
        break;
}

?>