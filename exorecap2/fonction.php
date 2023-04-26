<?php
function vow(){
$tab=['a','e','i','o','u','y'];
foreach($tab as $pos=>$lettre){
    echo "-$lettre";
}
}

function pyranum($nbrl){
    $tab=[];
    $e=0;
    $val=1;
    
    for($i=0;$i<$nbrl;$i++){
        for($j=0;$j<7;$j++){
            $tab[$i][$j]='  ';
        }
    }
    for($i=0;$i<$nbrl;$i++){
        $e++;
        for($j=0;$j<$e;$j++){
            $tab[$i][$j]=$val;
            echo $tab[$i][$j];
               
    
        }
        $val++;
        echo"\n";
    }
    }

?>