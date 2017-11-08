<?php
session_start ();
include "./functions/functions-index.php";
$bdd = bdd_connect("localhost", "alume", "root", ""); // Connection à la BDD via ./functions/functions-index.php

$p = "p"; // Paramètre envoyé par $_GET dans l'URL
if(!isset($_GET[$p]) || $_GET[$p] == ""){
    $page = 'home'; // Si $_GET['p'] n'existe pas ou est vide, redirige automatiquement vers home.php
}
else{
    $files_array = scandir("./contents"); // prends les noms des fichiers dans le dossier contents et les mets dans un tableau (peut être affiché avec un printr($files_array))
    $files = ""; // Obligé de définir cette variable sinon le script ne fonctionne pas
    foreach($files_array as $value){ // Pour chaque nom de fichier
        $exp_value = explode('.', $value); // On sépare le nom du fichier de son exxtension avec le "."
        if($exp_value[0] == $_GET[$p]){ // Vérification de l'existence du fichier dans le dossier
            $files = $exp_value[0]; // s'il existe on l'enregistre dans $files
        }
    }
    if($_GET[$p] == $files){ // Deuxième vérification
        $page = $files; // Si validé, on enregistre de nouveau dans $page
    }
    else{
        $page = "404"; // Sinon, on redirige vers 404.php, donc $page = "404"
    }
}

ob_start(); // Fonction complexe permettant de sauvegarder le contenu d'un fichier dans une variable
    require "contents/".$page.".php"; // on recupère le fichier qui nous interesse, donc soit $_GET['p'] si validé, sinon 404
    $content = ob_get_contents(); // et $content prend le contenu de cette page
ob_end_clean(); // Fermeture de la fonction ob_start

include "layout.php"; // Affichage de la page contenant le $content
?>