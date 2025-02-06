<?php
include('include/twig.php');
$twig = init_twig();

$lang = isset($_GET['lang']) ? $_GET['lang'] : 'fr';

echo $twig->render('contact.twig', [
    'lang' => $lang, // Variable 'lang' pour gérer le menu
]);
?>
