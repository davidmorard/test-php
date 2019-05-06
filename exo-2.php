<?php
/*
On veut demander à l'utilisateur de rentrer les horaires du magasin
On demande à l'utilisateur de renter une heure et on lui dira si le magasin est ouvert
*/

//On demande à l'utilisateur de rentrer un créneau
// On demande à l'utilisateur de taper l'horaire d'ouverture
// On damnde à l'utilisateur de taper l'horaire de fermeture
// On vérifie que l'heure de début < heure de fin
// On demande si on veut rajouter un créneau (o/n)


// On demande à l'utilisateur de saisir à quelle heure il veut venir au magasin

// On affiche l'état d'ouverture du magasin

$creneaux =[];

while (true)
{
    $debut = (int)readline('Heure d\'ouverture : ');
    $fin = (int)readline('Heure de fermeture : ');
    if ($debut >= $fin) 
    {
        echo "Le créneau ne peut pas être enregistré car l'heure d'ouverture ($debut) est supérieur à l'heure de fermeture ($fin)";
    }
    else 
    {
        $creneaux[] = [$debut, $fin];
        $action = readline('Voulez-vous enregistrer un nouveau créneau (o/n)');
        if ($action === 'n')
        {
            break;
        }
    }
    
}

$heure = (int)readline("A quelle heure voulez-vous visiter le magasin ? ");
$creneauTrouve = false;

foreach($creneaux as $creneau) {
    if ($heure >= $creneau[0] && $heure <= $creneau[1]) {
        $creneauTrouve = true;
        break;
    } 
}

if ($creneauTrouve) {
    echo 'Le magasin sera ouvert';
} else {
    echo 'Désolé le magasin sera fermé';
}





