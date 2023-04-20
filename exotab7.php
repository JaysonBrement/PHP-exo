<?php
$valeur2=[];
$valeur1=[];
$total=0;
$nbr=readline("nbr de valeurs :");
for($i=0;$i<$nbr;$i++){
$saisie = readline('prix :');
$valeur1[$i]=$saisie;
}
for($i=0;$i<$nbr;$i++){
$saisie = readline('quantité :');
$valeur2[$i]=$saisie;
}
for($i=0;$i<$nbr;$i++){
    $total=$total+($valeur1[$i]*$valeur2[$i]);
}
echo "cout total :$total"
?>