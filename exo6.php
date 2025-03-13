<h1>Exercice 6</h1>

<p>
    Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité d'articles,
    son prix HT et un taux de TVA (exprimé en décimal. Ex: 20% -> 0.2).
</p>

<h2>Prix unitaire de l'article: 9.99 euros <br>
Quantité : 5 <br>
Taux de TVA : 0.2 <br>
Le montant de la facture à régler est de : 59.94 euros </h2>

<?php

$phtArticle = 9.99;
$nbArticle = 5;
$tauxTVA = 0.20;

echo "Prix unitaire de l'article : $phtArticle <br>";
echo "Quantité : $nbArticle <br>";
echo "Taux de TVA: $tauxTVA <br>";

$totalTTC = $nbArticle * $phtArticle * (1+$tauxTVA);

echo "Le montant à régler est de : $totalTTC";