
<?php
// Gérer les conditions avec if

/* $note = 12;
if($note >= 10){
    echo 'Bravo vous avez la moyenne !';
} else {
    echo 'Dommage vous n\'avez pas la moyenne !';
} */



/* $note = readline('Entrez votre note : ');
if ($note >= 10) {
    if ($note == 10) {
        echo 'Vous avez tout juste la moyenne';
    } else {
        echo 'Bravo vous avez la moyenne !';
    }
} else {
    echo 'Dommage vous n\'avez pas la moyenne !'; 
}  */



/* $note = (int)readline('Entrez votre note : ');
if ($note > 10) {
    echo 'Bravo vous avez la moyenne !';
} elseif ($note === 10) {
    echo 'Vous avez tout juste la moyenne';
} else {
    echo 'Dommage vous n\'avez pas la moyenne !'; 
}  */

/*$action = (int)readline('Entrez votre action : (1: attaquer, 2: défendre, 3: passer mon tour)');
if ($action === 1) {
    echo 'J\'attaque !';
} elseif ($action === 2) {
    echo 'Je défends !';
} elseif ($action === 3) {
    echo 'Je ne fais rien !';
} else {
    echo 'Commande inconnue';
} */

// Gérer les conditions avec switch

/* $action = (int)readline('Entrez votre action : (1: attaquer, 2: défendre, 3: passer mon tour)');
switch ($action) {
    case 1:
    echo 'J\'attaque !';
    break;
    case 2:
    echo 'Je défends !';
    break;
    case 3:
    echo 'Je ne fais rien !';
    break;
    default:
    echo 'Commande inconnue';
} */

$heure = (int)readline('Entrez l\'heure à laquelle vous souhaitez venir au magasin : ');
if ((9 <= $heure && $heure <= 12) || ( 14 <= $heure && $heure <= 17)) {
    echo 'le magasin est ouvert';
} else {
    echo 'le magasin est fermé';
}

/*
VRAI && VRAI = VRAI
VRAI && FAUX = FAUX
FAUX && FAUX = FAUX

VRAI || VRAI = VRAI
VRAI || FAUX = VRAI
FAUX || FAUX + FAUX
*/

?>