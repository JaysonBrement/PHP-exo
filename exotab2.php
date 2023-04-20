<?php
$neg=0;
$pos=0;
$valeur=[];
$nbr=readline("nbr de valeurs :");
for($i=0;$i<$nbr;$i++){
$saisie = readline('valeur :');
$valeur[$i]=$saisie;
}
for($i=0;$i<count($valeur);$i++){
    if($valeur[$i]>0){
        $pos++;
    }
    else{
        $neg++;
    }
}
echo "positif :$pos \n";
echo "negatif :$neg";

?>