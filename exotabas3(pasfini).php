<?php
$somme=0;
$moyenne=0;
$tab=array('margoulin' => array (10,18,12),'maturin'=>array(14,12,8),'JeanBureau'=>array(20,20,20),'JeanEscalope'=>array(10,10,10),'SAAARTEC'=>array(1,2,3));
foreach($tab as $nom => $notes){
    echo "nom :$nom | ";
    echo "notes: ";
    foreach($notes as $xnotes => $xxnotes){
        echo "$xxnotes|";
    }
    echo "\n";
}
foreach($tab as $nom => $notes){
    echo "nom :$nom | ";
    echo "notes: ";
    foreach($notes as $xnotes => $xxnotes){
        $somme=$somme+$xxnotes;
    }
    $moyenne=$somme/3;
    echo "moyenne :$moyenne \n";
    $moyenne=0;
    $somme=0;
}
?>