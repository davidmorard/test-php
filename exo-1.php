<?php
/*
Demande à l'utilisateur de rentrer une note ou de taper "fin"
Chaque note est sauvegardée dans un tableau $notes (pensez $notes[])
à la fin on affiche le tableau de note sous forme de liste
*/  

$notes = [];
// TANT QUE l'utilisateur ne tape pas "fin"
while (true) {
    $action = (int)readline('Entrez une nouvelle note (ou \'fin\' pour terminer la saisie) : ');
    // On ajoute la note tapée au tableau notes
    if ($action === 'fin') {
        break;
    } else {
        $notes[] = (int)$action;
    }
}

// POUR CHAQUE note DANS notes
foreach ($notes as $note) {
    // ON AFFICHE "- note"
    echo "- $note \n";
}
?>