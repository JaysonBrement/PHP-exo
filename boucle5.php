<?php
$heure=(int)readline('heure :');
$minute=(int)readline('minute :');
$seconde=(int)readline('seconde :');
if($seconde==60){
    $minute==$minute+1;
    $seconde==0;
}
if($minute==60){
    $heure==$heure+1;
    $minute==0;
}
echo "$heure/$minute/$seconde";

?>