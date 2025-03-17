<h1>Exercice 13</h1>

<p>
    Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau.
    Elle devra être affichée avec 2 décimales. 
</p>

<h2>Les notes obtenues par l'élèves sont: 10 12 8 19 3 16 11 13 9 <br>
    Sa moyenne générale est donc de: 11.22</h2>

<?php

$notes = [10, 12, 8, 19, 3, 16, 11, 13, 9 ];
$nbNotes = count($notes);
$sommeNotes = array_sum($notes);
$moyenne = round($sommeNotes / $nbNotes, 2);

    echo "Les notes obtenues par l'élèves sont: ".implode(" ",$notes)." <br>
    Sa moyenne générale est donc de: $moyenne";

