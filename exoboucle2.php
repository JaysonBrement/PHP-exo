<?php
$nb=readline('mot de passe :');
while($nb>=20 or $nb<=10){
    if($nb<10){
        echo 'plus grand !';
        $nb=(int)readline(' ');
    }
    elseif($nb>20){
        echo 'plus petit !';
        $nb=(int)readline(' ');
    }
}
echo "c'est bien gamin !"

?>