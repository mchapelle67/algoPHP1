<h1>Exercice 4</h1>

<p>
    Ecrire un algorithme permettant de savoir si une phrase est palindrome.
</p>

<h2>La phrase « Engage le jeu que je le gagne » est palindrome. </h2>

<?php

$palindrome = "engage le jeu que je le gagne";
$replaced = str_replace(' ', '', $palindrome);

if (strrev($replaced) === $replaced) {
    echo "La phrase « $palindrome » est un palindrome."; 
} 
else {
    echo "La phrase « $palindrome » n'est pas un palindrome";
}

