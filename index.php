<?php
require_once "./modele.php";
require_once "./trombi.php";

function recherche (string $nom): bool{
    if (stripos($nom, $_GET['who']) !== false){
        return true;
    }

    return false;
}

?>

    
    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Trombi Dev'Enger</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
    <body>
    <?php

// Afficher le header HTML ok
Showheader();

// Afficher le formulaire ok
Showform();

// Récupération et traitement de la requête. + Afficher les etudiants ok

recherche2($trombi);

// Afficher le footer HTML

Showfooter();

?>


    </body>
    </html>

