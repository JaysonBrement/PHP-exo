<?php
require 'fonction.php';
$levier=0;
$nombre=0;
$essaie=0;
while($levier<1){
    $nombre=readline('nombre ?');
    echo "\n";
    if(is_int($nombre/2)==false){
    echo "\npas pair";
    $essaie++;
    echo "\nnombre d'essaie =$essaie\n";
    
}
elseif(is_int($nombre/3)==false){
    echo "\npas divisible par 3";
    $essaie++;
    echo "\nnombre d'essaie =$essaie\n";
}
else{
    echo "\nle nombre $nombre est divisible par 2 et 3\n";
    $essaie++;
    echo "\nnombre d'essaie =$essaie\n";
    $levier++;
    }
}

?>