<?php
$valeur2=[];
$btableau=[];
$valeur1=[];
$nbr=readline("nbr de valeurs :");
for($i=0;$i<$nbr;$i++){
$saisie = readline('valeur tab 1:');
$valeur1[$i]=$saisie;
}
for($i=0;$i<$nbr;$i++){
$saisie = readline('valeur tab 2:');
$valeur2[$i]=$saisie;
}
for($i=0;$i<count($valeur1);$i++){
    $btableau[$i]=$valeur1[$i]+$valeur2[$i];
}
for($i=0;$i<count($btableau);$i++){
    echo $btableau[$i];
    echo "|";
}
?>