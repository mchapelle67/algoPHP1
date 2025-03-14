<h1>Exercice 9</h1>

<p>
    Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
    Si la personne est une femme dont l'âge est compris entre 18 et 24 ans ou si c'est un homme de plus de 20 ans, 
    alors celle-ci est imposable (sinon ce n'est pas le cas, "non imposable")
</p>

<h2>Age: 32 <br>
    Sexe: F <br>
    La personne est imposable </h2>

    <?php

$age = 32;
$sexe = "F";

$hommeImposable = ($sexe == "M") && ($age > 20);
$femmeImposable = ($sexe == "F") && ($age >= 18 && $age <= 34);

echo "Age: $age <br>";
echo "Sexe: $sexe <br>";

if ($hommeImposable || $femmeImposable) {
    echo "La personne est imposable.";
} else {
    echo "La personne n'est pas imposable.";
}