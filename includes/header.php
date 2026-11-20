<!DOCTYPE html>
<html>
    <head>
        <title>Matti Hedegaard - Portfolie</title>
        <link rel="stylesheet" href="css/base.css?v=2">
        <link rel="stylesheet" href="css/<?= $page ?>.css">
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" defer></script>
        <script src="js/main.js" defer></script>
        <script src="js/<?= $page ?>.js" defer></script>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
    <div class="topButtons">
        <p onclick="location.href='<?= url($page, 'da') ?>'">DA</p>
        <p>/</p>
        <p onclick="location.href='<?= url($page, 'en') ?>'">EN</p>
    </div>