<?php
$somme=0;
$notes=array('JeanBureau'=>20,'margoulin'=>7,'maturin'=>14,'JeanEscalope'=>4,'SAAARTEC'=>0);
foreach($notes as $nom => $nbr){
    echo "$nom | $nbr\n";
}
foreach($notes as $nom => $nbr){
    $somme=$somme+$nbr;

}
$moyenne=$somme/count($notes);
echo "moyenne = $moyenne";
?>