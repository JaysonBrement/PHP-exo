<?php
$nbr1=readline('saisie :');
$result=1;
for ($i=1;$i<=$nbr1;$i++){
    $result=$result*$i;
}
echo "la factorielle de $nbr1 est $result"
?>