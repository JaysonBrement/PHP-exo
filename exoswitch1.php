<?php
$somme=0;
$tableau=[];
$max=0;
$min=0;
$a=0;
$nbr=readline('nbr de valeurs :');
for ($i=0;$i<$nbr;$i++){
    $tableau[$i]=readline("saisie :");
}
while($a<3){
$a=readline('0:somme | 1:maximum | 2:minimum | 3:quitter ');
switch($a){
    case 0:
        for($i=0;$i<count($tableau);$i++){
            $somme=$somme+$tableau[$i];
        }
        echo "somme = $somme \n";
        
        break;
    case 1:
        for($i=0;$i<count($tableau);$i++){
            $tmp=$tableau[$i];
            if($tmp>$max){
                $max=$tmp;
            }
        }
        echo "maximum = $max \n";
        
        break;
    case 2:
        $min=$tableau[0];
        for($i=0;$i<count($tableau);$i++){
            $tmp=$tableau[$i];
            if($tmp<$min){
                $min=$tmp;
            }
        }
        echo "minimum = $min \n";
        
        break;
    case 3:
        echo 'au revoir !';
        break;
    
}
}

?>