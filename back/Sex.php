<?php

// Déclare l'énumération nommée "Sex"
enum Sex {
    // Les cas possibles. Les noms des cas sont écrits en PascalCase par convention.
    case Male;
    case Female;
}

// Exemple d'utilisation
function displaySex(Sex $sex): string {
    return "Le sexe est : " . $sex->name;
}

/*
$animalSex = Sex::Female;

echo displaySex($animalSex); // Affiche "Le sexe est : Female"

echo "\n";

$animalSex2 = Sex::Male;

echo displaySex($animalSex2); // Affiche "Le sexe est : Male"
//*/
