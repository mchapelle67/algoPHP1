<h1>Exercice 12</h1>

<p> A partir d'une fonction personnalisée et à partir d'un tableau de prénoms et de langue 
    associée (tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur 
    langue respective (français, "salut" - anglais, "hello" - espagnol, "hola") en utilisant un switch.
</p>

<h2> Salut Mickaël <br>
    Hola Virgile <br>
    Hello Marie-Claire</h2>

<h2> Variante: trier par ordre alphabétique. <br>
    Hello Marie-Claire <br>
    Salut Mickaël <br>
    Hola Virgile</h2>

<?php

// ksort($prenom);

$personnes = [
    "Mickaël" => "Chinois",
    "Marie-Claire" => "Anglais",
    "Virgile" => "Espagnol"
];

function bonjour($prenom, $langue) {
    switch($langue) {
        case "Espagnol": echo "Hola $prenom <br>"; break;
        case "Anglais": echo "Hello $prenom <br>"; break;
        case "Français": echo "Salut $prenom <br>"; break;
        default: echo "Cette langue n'est pas prise en compte."; 
    }
 }

foreach($personnes as $prenom => $langue) {
    // var_dump($langue);die;
     return bonjour($prenom, $langue);
}

var_dump($personnes);

