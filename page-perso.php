<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

// Récupérer la langue choisie dans l'URL (par défaut 'fr')
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'fr';

// Inclure le fichier de données en fonction de la langue
if ($lang == 'fr') {
    include('include/personnage-fr.php');
} else {
    include('include/personnage-en.php');
}

// Lancement du moteur Twig :
// On passe la variable $lang et les données des personnages au modèle Twig
echo $twig->render('modele1-perso.twig', [
    'lang' => $lang,           // Variable 'lang' pour gérer le menu
    'personnages' => $personnages, // Données des personnages
]);
