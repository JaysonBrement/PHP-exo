<?php
$tab=[];
$max=0;
$tmp=0;
for($i=0;$i<8;$i++){
    for($j=0;$j<12;$j++){
        $tab[$i][$j] =rand(0,rand(0,rand(0,rand(0,rand(0,654)))));
    }
}
for($i=0;$i<8;$i++){
    for($j=0;$j<12;$j++){
        echo $tab[$i][$j];
        echo "|";
    }
    echo "\n------------------------\n";
}
for($i=0;$i<8;$i++){
    for($j=0;$j<12;$j++){
        $tmp=$tab[$i][$j];
        if($tmp>$max){
            $max=$tmp;
        }
    }
    ;
}
echo "maximum :$max"
?>