<?php
    function prixht($prix,$nbart,$TVA){
    $prix = (float)readline('prix HT :');
    $nbart = (int)readline('nombres darticles :');
    $TVA = (int)readline ('taux TVA :');
    $TVA = $TVA / 100;
    $ttl = ($prix * $nbart) * (1 + $TVA);
    return $ttl;
    }
    function pgcd($x,$y){
        while ($x != $y) {
        if ($x > $y)
            $x = $x - $y;
        else
            $y = $y - $x;
        }

    return $x;
    }
    function ppcm($a,$b){
        $res = $a * $b;
        while($a > 1){
            $r = $a % $b;
        if($r == 0 ){
          $result = $res / $b;
            break;  
                 }
            $a = $b;
            $b = $r;
        }
         return $result;
    }
    function multiplication($b){
        
for($i=1; $i<=10; $i++){
    $r=$i*$b;
    echo "$i x $b = $r .\n";
}
    }
    function factor($nbr1){
        $result=1;
        for ($i=1;$i<=$nbr1;$i++){
            $result=$result*$i;
        }
        return  $result;
    }
    function sommetabrand($nbr){
        $somme=0;
        $valeur=[];
       
        for($i=0;$i<$nbr;$i++){
        $saisie = rand(1,9);
        $valeur[$i]=$saisie;
        }
        for($i=0;$i<count($valeur);$i++){
            $somme=$somme+$valeur[$i];
        }
        return $somme;
    }
    function trianglerpl(){
    $nbr=readline('nbr de ligne');
for ($i = 0; $i < $nbr; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        if ($j == 0 or $j == $i or $i == 7) {
            echo "x";
        } else {
            echo "o";
        }
    }
    echo "\n";
}}
function trietoile(){

    $suite = array();
for($i=1;$i<=13;$i++){
    if($i<=7){
        for($j=1;$j<=$i;$j++){
            $suite[$i][$j]="♦";
            echo $suite[$i][$j];
        }
    }
    else{
        for($j=(13-$i);$j>=0;$j--){ 
            $suite[$i][$j]="♦";
            echo $suite[$i][$j];
        }
    }
    echo "\n";
}}
?>