<?php
session_start(); // Démarre la session pour stocker les données

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

$lang = isset($_GET['lang']) ? $_GET['lang'] : 'fr';

if (!empty($_POST)) {
    // Sécurisation des données
    $nom = isset($_POST["nom"]) ? htmlspecialchars($_POST["nom"]) : "Inconnu";
    $prenom = isset($_POST["prenom"]) ? htmlspecialchars($_POST["prenom"]) : "Non fourni";
    $email = isset($_POST["email"]) ? htmlspecialchars($_POST["email"]) : "Non fourni";

    // Affichage de formu.twig avec Twig
    echo $twig->render('formu.twig', [
        'lang' => $lang,
        'nom' => $nom,
        'prenom' => $prenom,
        'email' => $email,
    ]);
} else {
    header("Location: contact.php?lang=" . $lang); // Redirection si le formulaire n'a pas été soumis
    exit();
}

?>