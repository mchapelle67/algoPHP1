<h1>Exercice 1</h1>

<p>Soit la phrase: "Notre formation DL commence aujourd'hui".<br>
Ecrire un algorithme permettant de compter le nombre de lettre présent dans cette phrase (espace inclus).
</p>

<h2> La phrase "Notre formation DL commence aujourd'hui" contient 39 caractères.<h2>
 
<?php

$phrase = "Notre formation DL commence aujourd'hui";
$nbCaractere  = strlen($phrase);
echo "La phrase $phrase contient $nbCaractere caractères.";