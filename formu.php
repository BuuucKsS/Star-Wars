<?php
// Démarre la session PHP pour pouvoir stocker des données de session
session_start();

// Inclut le fichier de configuration de Twig et initialise l'environnement Twig
include('include/twig.php');
$twig = init_twig();

// Détermine la langue à utiliser, soit à partir du paramètre GET 'lang', soit 'fr' par défaut
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'fr';

// Vérifie si des données ont été envoyées via POST (c'est-à-dire si le formulaire a été soumis)
if (!empty($_POST)) {
    // Récupère et sécurise les données du formulaire
    // Si une donnée n'existe pas, une valeur par défaut est utilisée
    // htmlspecialchars() est utilisé pour prévenir les attaques XSS
    $nom = isset($_POST["nom"]) ? htmlspecialchars($_POST["nom"]) : "Inconnu";
    $prenom = isset($_POST["prenom"]) ? htmlspecialchars($_POST["prenom"]) : "Non fourni";
    $email = isset($_POST["email"]) ? htmlspecialchars($_POST["email"]) : "Non fourni";

    // Utilise Twig pour rendre le template 'formu.twig'
    // Passe les variables nécessaires au template : langue et données du formulaire
    echo $twig->render('formu.twig', [
        'lang' => $lang,
        'nom' => $nom,
        'prenom' => $prenom,
        'email' => $email,
    ]);
} else {
    // Si aucune donnée POST n'a été reçue (formulaire non soumis),
    // redirige l'utilisateur vers la page de contact
    header("Location: contact.php?lang=" . $lang);
    exit(); // Arrête l'exécution du script après la redirection
}

?>