<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./style/index.css" />
    <title>Page d'accueil</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="index.php#competences">Compétences</a></li>
                <li><a href="index.php#formation">Formations</a></li>
                <li><a href="index.php">Réalisations</a></li>
                <li><a href="index.php#contact">Contact</a></li>
            </ul>  
        </nav>
    </header>
<?php
include("pages/accueil.php");
include("pages/competences.php");
include("pages/formation.php");
include("pages/contact.php");
?>
</body>
</html>
