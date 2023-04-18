<?php
$heure=(int)readline('heure :');
$minute=(int)readline('minute :');
$seconde=(int)readline('seconde :');
$seconde=$seconde+1;
if($seconde==60){
    $seconde=$seconde-60;
    $minute=$minute+1;
}
if($minute==60){
    $heure=$heure+1;
    $minute=$minute-60;
}
if($heure==24){
    $heure=0;
    $minute=0;
    $seconde=0;
}
echo "$heure h $minute $seconde/";
?>