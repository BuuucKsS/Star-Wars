<?php
// 1. Millennium Falcon
$vaisseau1 = [
    "nom" => "Millennium Falcon",
    "image" => "./images/vaisseau/faucon.png",
    "description" => "A modified, fast, and powerful cargo ship.",
    "role" => "Used for smuggling missions and key battles.",
    "apparitions" => "Appears in all trilogies.",
    "capacités" => "Fast, highly maneuverable, and equipped with powerful laser cannons.",
    "point_faible" => "Constant modifications required for proper operation.",
    "caractéristiques" => [
        "fabricant" => "Corellian Engineering Corporation", 
        "taille" => "34.75 meters", 
        "poids" => "25 tons",
        "autonomie" => "Unknown, but very high due to optimized fuel tanks",
        "vitesse" => [
            "vitesse_max" => "1,200 km/h in atmosphere",
            "vitesse_hyperespace" => "0.5 on the hyperdrive scale",
            "accélération" => "0 to 1000 km/h in seconds",
        ]
        ],
    "couleur" => "bleu",
    "lien" => "https://en.wikipedia.org/wiki/Millennium_Falcon",
];

// 2. X-Wing
$vaisseau2 = [
    "nom" => "x-Wing",
    "image" => "./images/vaisseau/xwing.png",
    "description" => "A versatile and iconic starfighter of the Rebel Alliance.",
    "role" => "Crucial in the destruction of the Death Stars.",
    "apparitions" => "Original trilogy, sequel trilogy.",
    "capacités" => "Versatile with proton torpedoes and defensive shields.",
    "point_faible" => "Less fast and fragile against large numbers of TIE Fighters.",
    "caractéristiques" => [
        "fabricant" => "Incom Corporation",
        "taille" => "12.5 meters",
        "poids" => "5 tons",
        "autonomie" => "Long missions thanks to its hyperdrive",
        "vitesse" => [
            "vitesse_max" => "1,050 km/h in atmosphere",
            "vitesse_hyperespace" => "1.0 on the hyperdrive scale",
            "accélération" => "Fast but limited by artificial gravity",
        ]
        ],
    "couleur" => "bleu",
    "lien" => "https://en.wikipedia.org/wiki/X-wing",
];

// 3. TIE Fighter
$vaisseau3 = [
    "nom" => "TIE Fighter",
    "image" => "./images/vaisseau/tiefighter.png",
    "description" => "The standard starfighter of the Galactic Empire.",
    "role" => "Used for space battles against the rebels.",
    "apparitions" => "All films involving the Empire.",
    "capacités" => "Agile and fast, equipped with laser cannons.",
    "point_faible" => "Lack of shields and life-support systems.",
    "caractéristiques" => [
        "fabricant" => "Sienar Fleet Systems",
        "taille" => "6.3 meters",
        "poids" => "3 tons",
        "autonomie" => "Limited without support from a mothership",
        "vitesse" => [
            "vitesse_max" => "1,200 km/h in atmosphere",
            "vitesse_hyperespace" => "Not equipped",
            "accélération" => "Very fast, ideal for swarm attacks",
        ]
        ],
    "couleur" => "rouge",
    "lien" => "https://en.wikipedia.org/wiki/TIE_fighter",
];

// 4. Slave I
$vaisseau4 = [
    "nom" => "Slave I",
    "image" => "./images/vaisseau/slave.png",
    "description" => "The personal ship of Boba Fett and Jango Fett.",
    "role" => "Used for bounty hunting with advanced technology.",
    "apparitions" => "Attack of the Clones, The Empire Strikes Back, The Book of Boba Fett.",
    "capacités" => "Equipped with advanced weapons like sonic bombs.",
    "point_faible" => "Lacks speed against some fast starfighters.",
    "caractéristiques" => [
        "fabricant" => "Kuat Systems Engineering",
        "taille" => "21.5 meters",
        "poids" => "30 tons",
        "autonomie" => "Excellent, designed for long missions",
        "vitesse" => [
            "vitesse_max" => "1,000 km/h in atmosphere",
            "vitesse_hyperespace" => "Class 1.0",
            "accélération" => "Moderate but very maneuverable",
        ]
        ],
    "couleur" => "rouge",
    "lien" => "https://en.wikipedia.org/wiki/Slave_I",
];

// 5. Star Destroyer
$vaisseau5 = [
    "nom" => "Star Destroyer",
    "image" => "./images/vaisseau/stardestroyer.png",
    "description" => "Massive warship of the Empire.",
    "role" => "Used to dominate space battles.",
    "apparitions" => "All trilogies and Rogue One.",
    "capacités" => "Capable of carrying troops and TIE fighters.",
    "point_faible" => "Its size makes it vulnerable to targeted attacks.",
    "caractéristiques" => [
        "fabricant" => "Kuat Drive Yards",
        "taille" => "1,600 meters",
        "poids" => "Millions of tons",
        "autonomie" => "Almost unlimited with refueling",
        "vitesse" => [
            "vitesse_max" => "975 km/h in atmosphere",
            "vitesse_hyperespace" => "Class 2.0",
            "accélération" => "Slow but steady",
        ]
        ],
    "couleur" => "rouge",
    "lien" => "https://en.wikipedia.org/wiki/Star_Destroyer",
];

// 6. Tantive IV
$vaisseau6 = [
    "nom" => "Tantive IV",
    "image" => "./images/vaisseau/tantive.png",
    "description" => "The diplomatic ship of the Organa family.",
    "role" => "Transporting the Death Star plans.",
    "apparitions" => "A New Hope, Rogue One.",
    "capacités" => "High speed for a diplomatic transport.",
    "point_faible" => "Poorly equipped for space combat.",
    "caractéristiques" => [
        "fabricant" => "Corellian Engineering Corporation",
        "taille" => "126.68 meters",
        "poids" => "41,000 tons",
        "autonomie" => "Great autonomy, designed for diplomacy",
        "vitesse" => [
            "vitesse_max" => "1,200 km/h in atmosphere",
            "vitesse_hyperespace" => "Class 2.0",
            "accélération" => "Fast, ideal for escape",
        ]
        ],
    "couleur" => "bleu",
    "lien" => "https://en.wikipedia.org/wiki/Tantive_IV",
];

// 7. Death Star
$vaisseau7 = [
    "nom" => "Death Star",
    "image" => "./images/vaisseau/etoilenoire.png",
    "description" => "Massive space station capable of destroying planets.",
    "role" => "Superweapon of the Galactic Empire.",
    "apparitions" => "A New Hope, Return of the Jedi, Rogue One.",
    "capacités" => "Planetary destruction with its superlaser.",
    "point_faible" => "Vulnerable points exploited by the Rebels.",
    "caractéristiques" => [
        "fabricant" => "Galactic Empire",
        "taille" => "160 kilometers in diameter",
        "poids" => "Incalculable",
        "autonomie" => "Unlimited with its own infrastructure",
        "vitesse" => [
            "vitesse_max" => "Stationary",
            "vitesse_hyperespace" => "Not equipped",
            "accélération" => "None, remains in orbit",
        ]
        ],
    "couleur" => "rouge",
    "lien" => "https://en.wikipedia.org/wiki/Death_Star",
];

// 8. Starkiller Base
$vaisseau8 = [
    "nom" => "Starkiller Base",
    "image" => "./images/vaisseau/starkiller.png",
    "description" => "Superweapon built inside a frozen planet, capable of destroying multiple planets at once.",
    "role" => "Weapon of terror for the First Order, used to destroy the New Republic.",
    "apparitions" => "Star Wars: The Force Awakens.",
    "capacités" => "Destruction of entire star systems.",
    "point_faible" => "Instability of the main reactor, exploited by the Resistance.",
    "caractéristiques" => [
        "fabricant" => "First Order",
        "taille" => "Planet-sized",
        "poids" => "Incalculable",
        "autonomie" => "Unlimited, but unstable without maintenance",
        "vitesse" => [
            "vitesse_max" => "Stationary",
            "vitesse_hyperespace" => "Not applicable",
            "accélération" => "None, parked",
        ]
        ],
    "couleur" => "rouge",
    "lien" => "https://en.wikipedia.org/wiki/Starkiller_(Star_Wars)",
];

$vaisseaux = [$vaisseau1, $vaisseau2, $vaisseau3, $vaisseau4, $vaisseau5, $vaisseau6, $vaisseau7, $vaisseau8];
?>