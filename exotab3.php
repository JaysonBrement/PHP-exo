<?php
$somme=0;
$valeur=[];
$nbr=readline("nbr de valeurs :");
for($i=0;$i<$nbr;$i++){
$saisie = readline('valeur :');
$valeur[$i]=$saisie;
}
for($i=0;$i<count($valeur);$i++){
    $somme=$somme+$valeur[$i];
}
echo "total :$somme";
?>