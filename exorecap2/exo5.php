<?php
$vall=1;
$valcol=1;
for($i=0;$i<5;$i++){
        for($j=0;$j<5;$j++){
            $tab[$i][$j]=$vall*$valcol;
            echo str_pad($tab[$i][$j],10);
            $valcol++;
        }
        $vall++;
        $valcol=1;
        echo "\n";
}
?>