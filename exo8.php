<h1>Exercice 8</h1>

<p>
    Ecrire un algorithme qui renvoie la table de multiplication d'un nombre passé en paramètre sous la forme:
</p>

<h2>Table de 8:<br>
1 x 8 = 8<br>
2 x 8 = 16<br>
3 x 8 = 24<br>
...</h2 

<?php
 // TECHNIQUE FOR 

 $nb = 8; 

 for($i = 1; $i <= 10; $i++) {
     echo "Table de multiplication de $i : <br>"; 
     echo "$i x $nb = " . ($i * $nb) . "<br>";  
     echo "<br>"; 
 }

 // TECHNIQUE FOREACH