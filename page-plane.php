<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

// Récupérer la langue choisie dans l'URL (par défaut 'fr')
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'fr';

// Inclure le fichier de données en fonction de la langue
if ($lang === 'fr') {
    include('include/planete-fr.php');
} else {
    include('include/planete-en.php');
}

// Lancement du moteur Twig :
// On passe la variable $lang et les données des planètes au modèle Twig
echo $twig->render('modele2-plane.twig', [
    'lang' => $lang,           // Variable 'lang' pour gérer le menu
    'planetes' => $planetes,    // Données des planètes
]);
