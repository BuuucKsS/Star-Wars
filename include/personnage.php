<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);


// Personnage 1 : Luke Skywalker
$personnage1 = [
    "nom" => "luke skywalker",
    "age" => 19,
    "statut" => "Jedi",
    "image" => "./images/jedi/luke.webp",
    "role" => "Héros principal de la trilogie originale",
    "taille" => "1.72 m",
    "planete_origine" => "Tatooine",
    "film_apparition" => "Star Wars: Episode IV - A New Hope",
    "acteur" => "Mark Hamill",
    "arme_principale" => "Sabre laser bleu",
    "vehicule_favori" => "X-Wing",
    "couleur" => "vert",
    "badge" => "./images/jedi/badgejedi.png",
    "lien" => "https://fr.wikipedia.org/wiki/Luke_Skywalker",
];

// Personnage 2 : Leia Organa
$personnage2 = [
    "nom" => "leia organa",
    "age" => 19,
    "statut" => "Leader de la Rébellion",
    "image" => "./images/jedi/leia.webp",
    "role" => "Princesse et leader rebelle",
    "taille" => "1.50 m",
    "planete_origine" => "Alderaan",
    "film_apparition" => "Star Wars: Episode IV - A New Hope",
    "acteur" => "Carrie Fisher",
    "arme_principale" => "Blaster",
    "vehicule_favori" => "Tantive IV",
    "couleur" => "bleu",
    "badge" => "./images/jedi/badgerebelle.png",
    "lien" => "https://fr.wikipedia.org/wiki/Leia_Organa",
];

// Personnage 3 : Han Solo
$personnage3 = [
    "nom" => "han solo",
    "age" => 29,
    "statut" => "Contrebandier",
    "image" => "./images/jedi/hansolo.webp",
    "role" => "Pilote du Faucon Millenium et héros rebelle",
    "taille" => "1.80 m",
    "planete_origine" => "Corellia",
    "film_apparition" => "Star Wars: Episode IV - A New Hope",
    "acteur" => "Harrison Ford",
    "arme_principale" => "Blaster DL-44",
    "vehicule_favori" => "Faucon Millenium",
    "couleur" => "jaune",
    "badge" => "./images/jedi/badgerebelle.png",
    "lien" => "https://fr.wikipedia.org/wiki/Han_Solo",
];

// Personnage 4 : Dark Vador
$personnage4 = [
    "nom" => "dark vador",
    "age" => 46,
    "statut" => "Sith",
    "image" => "./images/jedi/vador.png",
    "role" => "Bras droit de l'Empereur",
    "taille" => "2.02 m",
    "planete_origine" => "Tatooine",
    "film_apparition" => "Star Wars: Episode IV - A New Hope",
    "acteur" => "David Prowse (voix : James Earl Jones)",
    "arme_principale" => "Sabre laser rouge",
    "vehicule_favori" => "TIE Advanced x1",
    "couleur" => "rouge",
    "badge" => "./images/jedi/badgesith.png",
    "lien" => "https://fr.wikipedia.org/wiki/Anakin_Skywalker",
];

// Personnage 5 : Yoda
$personnage5 = [
    "nom" => "yoda",
    "age" => 900,
    "statut" => "Maître Jedi",
    "image" => "./images/jedi/yoda.webp",
    "role" => "Sage et mentor des Jedi",
    "taille" => "0.66 m",
    "planete_origine" => "Inconnue",
    "film_apparition" => "Star Wars: Episode V - The Empire Strikes Back",
    "acteur" => "Frank Oz (voix et marionnette)",
    "arme_principale" => "Sabre laser vert",
    "vehicule_favori" => "Aucun",
    "couleur" => "vert",
    "badge" => "./images/jedi/badgejedi.png",
    "lien" => "https://fr.wikipedia.org/wiki/Yoda",
];

// Personnage 6 : Obi-Wan Kenobi
$personnage6 = [
    "nom" => "obi-wan kenobi",
    "age" => 57,
    "statut" => "Jedi",
    "image" => "./images/jedi/obi.png",
    "role" => "Maître Jedi et mentor de Luke",
    "taille" => "1.82 m",
    "planete_origine" => "Stewjon",
    "film_apparition" => "Star Wars: Episode IV - A New Hope",
    "acteur" => "Alec Guinness (Ewan McGregor dans les préquels)",
    "arme_principale" => "Sabre laser bleu",
    "vehicule_favori" => "Starfighter Jedi",
    "couleur" => "bleu",
    "badge" => "./images/jedi/badgejedi.png",
    "lien" => "https://fr.wikipedia.org/wiki/Obi-Wan_Kenobi",
];

// Personnage 7 : Chewbacca
$personnage7 = [
    "nom" => "chewbacca",
    "age" => 200,
    "statut" => "Wookiee",
    "image" => "./images/jedi/chew.png",
    "role" => "Copilote et fidèle allié de Han Solo",
    "taille" => "2.28 m",
    "planete_origine" => "Kashyyyk",
    "film_apparition" => "Star Wars: Episode IV - A New Hope",
    "acteur" => "Peter Mayhew",
    "arme_principale" => "Arbalète laser",
    "vehicule_favori" => "Faucon Millenium",
    "couleur" => "jaune",
    "badge" => "./images/jedi/badgerebelle.png",
    "lien" => "https://fr.wikipedia.org/wiki/Chewbacca",
];

// Personnage 8 : Rey
$personnage8 = [
    "nom" => "rey",
    "age" => 19,
    "statut" => "Jedi",
    "image" => "./images/jedi/rey.png",
    "role" => "Héroïne de la trilogie suite",
    "taille" => "1.70 m",
    "planete_origine" => "Jakku",
    "film_apparition" => "Star Wars: Episode VII - The Force Awakens",
    "acteur" => "Daisy Ridley",
    "arme_principale" => "Bâton de combat",
    "vehicule_favori" => "Faucon Millenium",
    "couleur" => "bleu",
    "badge" => "./images/jedi/badgejedi.png",
    "lien" => "https://fr.wikipedia.org/wiki/Rey_(Star_Wars)",
];

// Personnage 9 : Kylo Ren
$personnage9 = [
    "nom" => "kylo ren",
    "age" => 29,
    "statut" => "Chevalier de Ren / Sith",
    "image" => "./images/jedi/kyloren.png",
    "role" => "Antagoniste principal de la trilogie suite",
    "taille" => "1.89 m",
    "planete_origine" => "Chandrila",
    "film_apparition" => "Star Wars: Episode VII - The Force Awakens",
    "acteur" => "Adam Driver",
    "arme_principale" => "Sabre laser à garde rouge",
    "vehicule_favori" => "TIE Silencer",
    "couleur" => "rouge",
    "badge" => "./images/jedi/badgesith.png",
    "lien" => "https://fr.wikipedia.org/wiki/Kylo_Ren",
];

// Personnage 10 : Emperor Palpatine
$personnage10 = [
    "nom" => "empereur palpatine",
    "age" => 84,
    "statut" => "Sith",
    "image" => "./images/jedi/palpa.webp",
    "role" => "Maître des Sith et dirigeant de l'Empire",
    "taille" => "1.73 m",
    "planete_origine" => "Naboo",
    "film_apparition" => "Star Wars: Episode III - Revenge of the Sith",
    "acteur" => "Ian McDiarmid",
    "arme_principale" => "Éclairs de Force",
    "vehicule_favori" => "Destroyer Stellaire",
    "couleur" => "violet",
    "badge" => "./images/jedi/badgesith.png",
    "lien" => "https://fr.wikipedia.org/wiki/Palpatine",
];


$personnages = [$personnage1, $personnage2, $personnage3, $personnage4, $personnage5, $personnage6, $personnage7, $personnage8, $personnage9, $personnage10];
?>
