<?php
$valeur=0;
$max=0;
$chomage = array("Autriche"=>4.9,"Allemagne"=>9.3,"Danemark"=>4.8,
"Espagne"=>9.4,"Espagne"=>9.7);
echo "toute les données :\n";
foreach($chomage as $pays => $taux){
    echo "$pays : $taux \n";
}
echo "||||||||||||||||||||||||||||||||||\n";
echo "taux en dessous de 5%\n";
foreach($chomage as $pays => $taux){
    if ($taux<5){
    echo "$pays : $taux \n";
    }
}
echo "|||||||||||||||||||||||||||||||||||||\n";
foreach($chomage as $pays => $taux){
    $tmp=$taux;
    if ($max<$tmp){
        $max=$tmp;
    }
}
echo "plus gros chomage : $pays | $max";
?>