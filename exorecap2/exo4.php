<?php
$nbr=0;
for($i=0;$i<5;$i++){
        for($j=0;$j<2;$j++){
            $tab[$i][$j]=rand(40,50);
            echo $tab[$i][$j];
            echo "|";
        }
        echo "\n";
}
for($i=0;$i<5;$i++){
    for($j=0;$j<2;$j++){
        if($tab[$i][$j]==42){
            $nbr++;
        }
    }
}

echo "42 apparait $nbr fois"
?>