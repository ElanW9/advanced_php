<?php
require("Planet.class.php");

$Mercurius = new Planet("Mercurius", 4880, 57910000);
$Venus = new Planet("Venus", 12104, 108208930);
$Aarde = new Planet("Aarde", 12756, 149597870);
$Mars = new Planet("Mars", 6794, 227936640);
$Jupiter = new Planet("Jupiter", 142984, 778412010);
$Saturnus = new Planet("Saturnus", 120536, 1426725400);
$Uranus = new Planet("Uranus", 51118, 2870972200);
$Neptunus = new Planet("Neptunus", 49572, 57910000);

$planets = [
    $Mercurius, $Venus, $Aarde, $Mars, $Jupiter, $Saturnus, $Uranus, $Neptunus
];

foreach ($planets as $planet) {
    print "<li>" . $planet->getName() . "  " . $planet->getOmtrek() . "</li>";
}

// echo '<pre>';
// var_dump($planets);
// exit;
