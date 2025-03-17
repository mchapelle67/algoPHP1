<h1>Exercice 11</h1>

<p>
    Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce tableau 
    et d'en afficher le contenu (une marque de voiture par ligne). 
    Il est égalemment demandé d'afficher le nombre de marques de voiture présentes dans le tableau. 
</p>

<h2>Il y a 4 marques de voitures dans le tableau:<br>
    Peugeot<br>
    Renault<br>
    BMW<br>
    Mercedes</h2>

    <?php

$marques = ["Peugeot", "Renault", "BMW", "Mercedes"];
        foreach($marques as $marque) {
            echo $marque."<br>";
        }

