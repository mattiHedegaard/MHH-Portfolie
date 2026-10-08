<?php
include("includes/header.php");

$page = $_GET['page'] ?? "frontpage";

switch ($page){
    case "frontpage":
        include("pages/frontpage.html");
        break;

    case "projects":
        include("pages/projects.html");
        break;

    case "about":
        include("pages/about.html");
        break;

    case "contact":
        include("pages/contact.html");
        break;

    case "background":
        include("pages/background.html");
        break;
    
    default:
        http_response_code(404);
        include("pages/404.html");
        break;
}

include("includes/footer.php");

?>