<h1>Exercice 2</h1>

<p>A partir de la phrase de l'exercice 1, 
    écrire l'instruction permettant de compter le nombre de mot contenus dans celle-ci.
</p>

<h2> La phrase "Notre formation DL commence aujourd'hui" contient 5 mots.<h2>
 
<?php

$phrase = "Notre formation DL commence aujourd'hui";

echo "La phrase «".$phrase."» contient ".str_word_count($phrase)." mots.";