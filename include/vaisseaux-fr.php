<?php
// 1. Faucon Millenium
$vaisseau1 = [
    "nom" => "faucon millenium",
    "image" => "./images/vaisseau/faucon.png",
    "description" => "Un vaisseau cargo modifié, rapide et puissant.",
    "role" => "Utilisé pour des missions de contrebande et des batailles clés.",
    "apparitions" => "Présent dans toutes les trilogies.",
    "capacités" => "Rapide, très manœuvrable et équipé de canons laser puissants.",
    "point_faible" => "Dépendance aux modifications constantes pour fonctionner correctement.",
    "caractéristiques" => [
        "fabricant" => "Corellian Engineering Corporation", 
        "taille" => "34.75 mètres", 
        "poids" => "25 tonnes",
        "autonomie" => "Inconnue, mais très élevée grâce à des réservoirs optimisés",
        "vitesse" => [
            "vitesse_max" => "1 200 km/h dans l'atmosphère",
            "vitesse_hyperespace" => "0.5 sur l'échelle hyperdrive",
            "accélération" => "0 à 1000 km/h en quelques secondes",
        ]
        ],
    "couleur" => "bleu",
    "lien" => "https://fr.wikipedia.org/wiki/Faucon_Millenium",
];



// 2. X-Wing
$vaisseau2 = [
    "nom" => "x-Wing",
    "image" => "./images/vaisseau/xwing.png",
    "description" => "Un chasseur polyvalent et emblématique de l'Alliance Rebelle.",
    "role" => "Essentiel dans la destruction des Étoiles de la Mort.",
    "apparitions" => "Trilogie originale, trilogie suite.",
    "capacités" => "Polyvalent avec des torpilles à protons et des boucliers défensifs.",
    "point_faible" => "Moins rapide et fragile face à des TIE Fighters en grand nombre.",
    "caractéristiques" => [
        "fabricant" => "Incom Corporation",
        "taille" => "12,5 mètres",
        "poids" => "5 tonnes",
        "autonomie" => "Missions longues grâce à son hyperdrive",
        "vitesse" => [
            "vitesse_max" => "1 050 km/h dans l'atmosphère",
            "vitesse_hyperespace" => "1.0 sur l'échelle hyperdrive",
            "accélération" => "Rapide mais limité par la gravité artificielle",
        ]
        ],
    "couleur" => "bleu",
    "lien" => "https://fr.wikipedia.org/wiki/X-wing",
];


// 3. TIE Fighter
$vaisseau3 = [
    "nom" => "TIE Fighter",
    "image" => "./images/vaisseau/tiefighter.png",
    "description" => "Le chasseur standard de l'Empire Galactique.",
    "role" => "Utilisé pour des combats spatiaux contre les rebelles.",
    "apparitions" => "Tous les films liés à l'Empire.",
    "capacités" => "Agile et rapide, équipé de canons laser.",
    "point_faible" => "Absence de boucliers et de systèmes de survie.",
    "caractéristiques" => [
        "fabricant" => "Sienar Fleet Systems",
        "taille" => "6,3 mètres",
        "poids" => "3 tonnes",
        "autonomie" => "Limitée sans soutien d'un vaisseau mère",
        "vitesse" => [
            "vitesse_max" => "1 200 km/h dans l'atmosphère",
            "vitesse_hyperespace" => "Non équipé",
            "accélération" => "Très rapide, idéal pour les attaques en essaim",
        ]
        ],
    "couleur" => "rouge",
    "lien" => "https://fr.wikipedia.org/wiki/TIE_fighter",
];


// 4. Slave I
$vaisseau4 = [
    "nom" => "Slave I",
    "image" => "./images/vaisseau/slave.png",
    "description" => "Le vaisseau personnel de Boba Fett et Jango Fett.",
    "role" => "Utilisé pour la chasse à prime, avec une technologie avancée.",
    "apparitions" => "L'Attaque des Clones, L'Empire Contre-Attaque, Le Livre de Boba Fett.",
    "capacités" => "Équipé d'armes avancées comme des bombes soniques.",
    "point_faible" => "Manque de vitesse face à certains chasseurs rapides.",
    "caractéristiques" => [
        "fabricant" => "Kuat Systems Engineering",
        "taille" => "21,5 mètres",
        "poids" => "30 tonnes",
        "autonomie" => "Excellente, conçu pour de longues missions",
        "vitesse" => [
            "vitesse_max" => "1 000 km/h dans l'atmosphère",
            "vitesse_hyperespace" => "Classe 1.0",
            "accélération" => "Modérée mais très maniable",
        ]
        ],
    "couleur" => "rouge",
    "lien" => "https://fr.wikipedia.org/wiki/Slave_I",
];

// 5. Star Destroyer
$vaisseau5 = [
    "nom" => "Star Destroyer",
    "image" => "./images/vaisseau/stardestroyer.png",
    "description" => "Immense vaisseau de guerre de l'Empire.",
    "role" => "Utilisé pour dominer les batailles spatiales.",
    "apparitions" => "Toutes les trilogies et Rogue One.",
    "capacités" => "Capable de transporter des troupes et chasseurs TIE.",
    "point_faible" => "Sa taille le rend vulnérable aux attaques ciblées.",
    "caractéristiques" => [
        "fabricant" => "Kuat Drive Yards",
        "taille" => "1 600 mètres",
        "poids" => "Des millions de tonnes",
        "autonomie" => "Presque illimitée avec ravitaillement",
        "vitesse" => [
            "vitesse_max" => "975 km/h dans l'atmosphère",
            "vitesse_hyperespace" => "Classe 2.0",
            "accélération" => "Lente mais constante",
        ]
        ],
    "couleur" => "rouge",
    "lien" => "https://fr.wikipedia.org/wiki/Star_Destroyer",
];

// 6. Tantive IV
$vaisseau6 = [
    "nom" => "Tantive IV",
    "image" => "./images/vaisseau/tantive.png",
    "description" => "Le vaisseau diplomatique de la famille Organa.",
    "role" => "Transport des plans de l'Étoile de la Mort.",
    "apparitions" => "Un Nouvel Espoir, Rogue One.",
    "capacités" => "Vitesse élevée pour un transport diplomatique.",
    "point_faible" => "Peu équipé pour le combat spatial.",
    "caractéristiques" => [
        "fabricant" => "Corellian Engineering Corporation",
        "taille" => "126,68 mètres",
        "poids" => "41 000 tonnes",
        "autonomie" => "Grande autonomie, conçu pour la diplomatie",
        "vitesse" => [
            "vitesse_max" => "1 200 km/h dans l'atmosphère",
            "vitesse_hyperespace" => "Classe 2.0",
            "accélération" => "Rapide, idéal pour l'évasion",
        ]
        ],
    "couleur" => "bleu",
    "lien" => "https://fr.wikipedia.org/wiki/Tantive_IV",
];

// 7. Étoile Noire
$vaisseau7 = [
    "nom" => "Étoile Noire",
    "image" => "./images/vaisseau/etoilenoire.png",
    "description" => "Station spatiale massive capable de détruire des planètes.",
    "role" => "Super-arme de l'Empire Galactique.",
    "apparitions" => "Un Nouvel Espoir, Le Retour du Jedi, Rogue One.",
    "capacités" => "Destruction planétaire avec son super-laser.",
    "point_faible" => "Points vulnérables exploités par les Rebelles.",
    "caractéristiques" => [
        "fabricant" => "Empire Galactique",
        "taille" => "160 kilomètres de diamètre",
        "poids" => "Incalculable",
        "autonomie" => "Illimitée avec ses propres infrastructures",
        "vitesse" => [
            "vitesse_max" => "Stationnaire",
            "vitesse_hyperespace" => "Non équipé",
            "accélération" => "Nulle, reste en orbite",
        ]
        ],
    "couleur" => "rouge",
    "lien" => "https://fr.wikipedia.org/wiki/%C3%89toile_de_la_mort",
];


// 8. Base Starkiller
$vaisseau8 = [
    "nom" => "Base Starkiller",
    "image" => "./images/vaisseau/starkiller.png",
    "description" => "Super-arme construite à l'intérieur d'une planète glaciale, capable de détruire plusieurs planètes à la fois.",
    "role" => "Instrument de terreur du Premier Ordre, utilisée pour éliminer la Nouvelle République.",
    "apparitions" => "Star Wars: Le Réveil de la Force.",
    "capacités" => "Destruction de systèmes stellaires entiers.",
    "point_faible" => "Instabilité du réacteur principal, exploité par la Résistance.",
    "caractéristiques" => [
        "fabricant" => "Premier Ordre",
        "taille" => "Taille d'une planète",
        "poids" => "Incalculable",
        "autonomie" => "Illimitée, mais instable sans maintenance",
        "vitesse" => [
            "vitesse_max" => "Stationnaire",
            "vitesse_hyperespace" => "Non applicable",
            "accélération" => "Aucune, stationnée",
        ]
        ],
    "couleur" => "rouge",
    "lien" => "https://fr.wikipedia.org/wiki/Starkiller_(Star_Wars)",
];


$vaisseaux = [$vaisseau1, $vaisseau2, $vaisseau3, $vaisseau4, $vaisseau5, $vaisseau6, $vaisseau7, $vaisseau8];
?>
