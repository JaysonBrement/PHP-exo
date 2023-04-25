<?php
require "fonction.php";
// prix article
$prix = (float)readline('prix HT :');
$nbart = (int)readline('nombres darticles :');
$TVA = (int)readline ('taux TVA :');
echo prixht($prix,$nbart,$TVA);
// ------------------------------

// pgcd 
$valeur1=readline('nbr1 :');
$valeur2=readline('nbr2 :');
echo "le pgcd est :";
echo pgcd($valeur1,$valeur2);
// ---------------------------------
// ppcm
$valeur1=readline('nbr1 :');
$valeur2=readline('nbr2 :');
echo "le ppcm est :";
echo ppcm($valeur1,$valeur2);
// -----------------------------------
// table de multiplication
$table=readline('table de multiplication ?');
multiplication($table);
// -------------------------
// factorielle
$valeur=readline('nombre ?');
echo "factorielle =";
echo factor($valeur);
// --------------------------
// somme tableau avec random
$valeur=readline('nombre de random :');
echo "la somme est :";
echo sommetabrand($valeur);
// ----------------------------


// trianglerpl();
// trietoile();

?>