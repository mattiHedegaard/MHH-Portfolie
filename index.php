<?php
include("includes/header.php");

$page = $_GET['page'] ?? "construction";

switch ($page){
    case "construction":
        include("pages/construction.html");
        break;
    
    default:
        include("index.html");
        break;
}

include("includes/footer.php");

?>