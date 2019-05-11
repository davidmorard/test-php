<?php
/*$variable = readline();
$debug = print_r($variable, true);*/

/* $variable = readline('Veuillez entrer un mot : ');
$minus = strtolower($variable);
$mot = strrev($minus);

if ($minus === $mot) {
    echo 'Ce mot est un palidrome';
} else {
    echo "Ce mot n'est pas un palindrome";
} */

$notes = [10, 20, 13];
$sum = array_sum($notes);
$count = count($notes);
$average = round($sum/$count, 2);
var_dump($average);
echo "Vous avez " . round($sum/$count) . " de moyenne !";
