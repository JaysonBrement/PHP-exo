<?php
$nb1 = (int)readline('nombre 1: ');
$nb2 = (int)readline('nombre 2: ');
if(($nb1 == 0) or ($nb2==0)){
    echo 'nul';
}
elseif(($nb1 < 0 and $nb2 < 0) or ($nb1 > 0 and $nb2 > 0)){
    echo 'positif';
}
else{
    echo 'negatif';
}

?>