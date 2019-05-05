<?php

// la boucle while

/* $chiffre = null;

while ($chiffre !== 10) {
    $chiffre = (int)readline('Entrez un chiffre : ');
    break;
}
echo 'Bravo vous avez gagné !'; */

// la boucle for

/* for ($i = 0; $i < 10; $i += 2) {
    echo "- $i \n";
} */

/* $notes = [10, 15, 16];

for ($i=0; $i<3; $i++) {
    echo ' - ' . $notes[$i] . "\n";
} */

// la boucle foreach

$eleves = [
    'cm2' => ['Jean', 'Marion', 'André', 'Etienne', 'Jules'],
    'cm1' => ['Marc', 'Robert', 'Arthir', 'Joachim', 'Hamed', 'Roger']
];

foreach ($eleves as $classe => $listEleves) {
    echo "La classe $classe \n";
    foreach ($listEleves as $eleves) {
        echo "- $eleves \n";
    }
    echo "\n";
}
