<?php
$max=0;
$tmp=0;
$indice=0;
$valeur=[];
$nbr=readline("nbr de valeurs :");
for($i=0;$i<$nbr;$i++){
$saisie = readline('valeur :');
$valeur[$i]=$saisie;
}
for($i=0;$i<count($valeur);$i++){
    $tmp=$valeur[$i];
    if($max<$tmp){
       $max=$tmp;
       $indice=$i;
    }
}
$indice++;
echo "valeur maximum :$max \n";
echo "position :$indice"


?>