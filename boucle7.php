<?php
$facture=0;
$cout=0.10;
$fotorest=(float)readline('nombre de photocopies :');
$n=0;
while(($fotorest>0) and ($n<10)){
    $fotorest=$fotorest-1;
    $facture=$facture+$cout;
    $n=$n+1;
}
if($n==10){
    $cout=$cout-0.01;
    $n=0;
}
while(($fotorest>0) and ($n<20)){
    $fotorest=$fotorest-1;
    $facture=$facture+$cout;
    $n=$n+1;
}
if($n==20){
    $cout=$cout-0.01;
    $n=0;
}
while($fotorest>0){
    $fotorest=$fotorest-1;
    $facture=$facture+$cout;
}
echo "cout :$facture"

?>