<?php
function randnumbercomp(){
$nb=rand(1,20);
switch($nb){
    case ($nb>=1 and $nb<=5):
        echo "il est compris entre 1 et 5";
        break;
    
    case ($nb>=6 and $nb<=10):
        echo "il est compris entre 6 et 10";
        break;
    case ($nb>=11 and $nb<=15):
        echo "il est compris entre 11 et 15";
        break;
    case ($nb>=16 and $nb<=20):
        echo "il est compris entre 16 et 20";
        break;
}
}

function randmessage($nb){
    
    switch($nb){
        case ($nb<7):
            echo "Bonjour";
            break;
        case ($nb>=7 and $nb<14):
            echo "Salut";
            break;
        case ($nb>=14):
            echo "Hello";
            break;
        
    }
}


function persotest($moustache,$chapeau,$femme,$homme,$lunette){
if(($chapeau=='oui' and $homme=='oui' and $lunette=='oui')){
    echo "prviolet";
    exit;
}elseif(($homme=='oui' and $moustache=='oui' and $lunette=='oui')){
    echo "clmoutarde";
    exit;
}elseif(($homme=='oui' and $lunette=='oui')){
    echo "rvrolive";
    exit;
}elseif(($femme=='oui' and $lunette=='oui')){
    echo "Mme leblanc";
    exit;
}elseif(($femme=='oui')){
    echo "MleRose";
    exit;
}
}
// tan que lever<1{ 
//     j'écris un chiffre
     
//     si (/2 pas un int)
//         afficher "pas pair"
//         essaie +1
//     sinonsi(/3 pas un int)
//         afficher "pas divisible par 3"
//         essaie +1
//     sinon
//         afficher "le nombre $nombre est divisible par 2 et 3"
//         levier +1
// } 


?>
    