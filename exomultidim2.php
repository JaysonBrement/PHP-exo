<?php
$tab=[];
$e=0;
for($i=0;$i<13;$i++){
    for($j=0;$j<7;$j++){
        $tab[$i][$j]='  ';
        echo $tab[$i][$j];
    }
    echo "\n";
}
for($i=0;$i<13;$i++){
    if ($e<7){$e++;
    for($j=0;$j<$e;$j++){
        $tab[$i][$j]='*';
           

    }
    }
    else break;
    
}
for($i=7;$i<13;$i++){
    $e--;
    for($j=0;$j>$e;$j--){
        $tab[$i][$j]='*';
           

    }
    }

echo "\n--------------------------\n";
for($i=0;$i<13;$i++){
    for($j=0;$j<7;$j++){
        echo $tab[$i][$j];
    }
    echo "\n";
}



?>