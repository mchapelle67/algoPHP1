<h1>Exercice 7</h1>

<p>
    Ecrire un algorithme permettant de renvoyer la catégorie d'un enfant en fonction de son âge: 
    <ul>
        <li>Poussin: entre 6 et 7 ans</li>
        <li>Pupille: entre 8 et 9 ans</li>
        <li>Minime: entre 10 et 11 ans</li>
        <li>Cadet: à partir de 12 ans</li>
        <li>Si la catégorie n'est pas géréer, merci de le préciser</li>

    <h2>L'enfant qui a 10 ans appartient à la catégorie "Minime"</h2>

    <?php

$age = 10;

if(gettype($age) == "integer") { 
    if ($age >= 6 && $age <= 7) {
    $categorie = "Poussin";
        } elseif ($age >= 8 && $age <= 9) {
    $categorie = "Pupille";
        } elseif ($age >= 10 && $age <= 11) {
    $categorie = "Minime";
        } else {
    $categorie = "Cadet";
 }
echo "L'enfant qui a 10 ans appartient à la catégorie: $categorie <br>";

} else {
        echo "Veuillez saisir un âge numérique !<br>";
    }

    // VERSION FACTORISER

    $age = 5;

if(gettype($age) == "integer") { 
    if ($age >= 12) {
    $categorie = "Cadet";
        } elseif ($age >= 10) {
    $categorie = "Minime";
        } elseif ($age >= 7) {
    $categorie = "Pupille";
    } else {
        $categorie = "Poussin";
    }
    echo "L'enfant qui a $age appartient à la catégorie: $categorie";

} else {
        echo "Veuillez saisir un âge numérique !";
    }
