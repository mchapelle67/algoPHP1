<h1>Exercice 10</h1>

<p>
A partir d'un montant à payer et d'une somme versée pour régler un achat, écrire l'algorithme qui 
affiche à l'utilisateur un rendu de monnaie en nombre de billet de 10 euros et 5 euros, de pièce de 2 euros 
et de 1 euros. 
</p>

<h2>Montant à payer: 152 euros <br>
    Montant versé: 200 euros <br>
    Reste à payer: 48 euros <br>
    *************************** <br>
    Rendue de monnaie : <br>
    4 billets de 10 euros - 1 billet de 5 euros - 1 pièce de 2 euros - 1 pièce de 1 euros<br>
    ***************************<h2>

    <?php

$montantTotal = 152;
$montantVerse = 200;
$especes = [
    "billetDix" => 4,
    "billetCinq" => 1,
    "pieceDeux" => 1,
    "pieceUn" => 1,
];


echo "Montant à payer: $montantTotal euros<br> 
    Montant versé: $montantVerse euros<br>
    Reste à payer: ".($montantVerse - $montantTotal)." euros<br>
    **************************** <br>
    Rendue de monnaie:<br>"
    .$especes["billetDix"]." billets de 10 euros - "
    .$especes["billetCinq"]." billet de 5 euros - "
    .$especes["pieceDeux"]." pièce de deux euros - "
    .$especes["pieceUn"]." pièce de 1 euros.";

