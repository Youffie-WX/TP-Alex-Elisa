<?php
//Fichier Controleur du site.
// Import des données et fonctions d'affichage : 
require_once "./modele.php";
require_once "./trombi.php";



// Afficher le header HTML 
Showheader();

// Afficher le formulaire 
Showform();

// Récupération et traitement de la requête. 
// Programme de recherche dans le tableau Trombi 

function recherche (string $nom): bool{
    if (stripos($nom, $_GET['who']) !== false){
        return true;
    }

    return false;
}

function recherche2(array $trombi){
$z = 0;
// stripos recherche dans chaque ligne de personne une valeur correspondant à la clé de chaque boucle
foreach ($trombi as $student) {
    if ($_GET['who'] == '') 
        afficherStudent($student);
    else
    {
        if (recherche($student['prénom']) || recherche($student['nom'])) {
            afficherStudent($student);
        }
        else $z++;
    } 
}
// la variable Z passe sur chaques lignes du tableau si il ne voit rien alors afficher pas de réponse
if ($z == count($trombi)) echo '<p>pas de réponse</p>';
}
// fin programme de recherche 
// Afficher la recherche : 

recherche2($trombi);

// Afficher le footer HTML

Showfooter();
?>


 

