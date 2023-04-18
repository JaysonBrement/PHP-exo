<?php
$heure=(int)readline('heure :');
$minute=(int)readline('minute :');
$minute=$minute+1;

if($minute>=60){
    $heure=$heure+1;
    $minute=$minute-60;
}
echo "$heure h $minute/"
?>