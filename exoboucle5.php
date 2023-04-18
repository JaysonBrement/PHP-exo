<?php
$a=readline('nbr1 :');
$b=readline('nbr2 :');

$res = $a * $b;
while($a > 1){
    $r = $a % $b;
if($r == 0 ){
  $result = $res / $b; 
         }
    $a = $b;
    $b = $r;
}
    echo $result;
?>