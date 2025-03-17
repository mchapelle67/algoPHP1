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

$personnes = [
    "Mickaël" => "Français",
    "Virgile" => "Espagnol",
    "Marie-Claire" => "Anglais"
];

function bonjour($prenom, $langue) {
    switch($langue) {
        case "Espagnol": echo "Hola $prenom"; break;
        case "Anglais": echo "Hello $prenom"; break;
        case "Français": echo "Salut $prenom"; break;
        default: echo "Cette langue n'est pas prise en compte."; 
    }
 }

 ksort($personnes);

foreach($personnes as $prenom => $langue) {
     echo bonjour($prenom, $langue)."<br>";
}





