<h1>Exercice 5</h1>

<p>
    Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros. 
</p>

<h2> Montant en francs: 100 <br>
100 francs = 15.25 euros. </h2>

<?php

$totalFrancs = 100;
$tauxConvertion = 6.55;

$totalEuros = round($totalFrancs / $tauxConvertion, 2);

echo "Montant en francs: $totalFrancs <br>";
echo "$totalFrancs francs = $totalEuros euros";
