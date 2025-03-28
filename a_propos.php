<?php
// Inclure le fichier qui contient la configuration et l'initialisation de Twig
include('include/twig.php');

// Initialiser Twig en appelant la fonction init_twig()
$twig = init_twig();

// Déterminer la langue à utiliser
// Si un paramètre 'lang' est présent dans l'URL, l'utiliser, sinon utiliser 'fr' (français) par défaut
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'fr';

// Rendre le template 'a_propos.twig' avec Twig
// Passer la variable 'lang' au template pour gérer le contenu multilingue
echo $twig->render('a_propos.twig', [
    'lang' => $lang, // Variable 'lang' pour gérer le menu et le contenu multilingue
]);
?>
