<?php
require 'fonction.php';
$a=readline('0 :quitter | 1 :livre sterling | 2 :dollar américain | 3 :dollar canadien | 4 :Yen | 5 :Nouveau peso | 6 :dirham marocain | 7 Roupie indienne');
$Lster=0.89;
$Dus=1.11;
$Dcan=1.51;
$yen=147.63;
$drmmaroc=11.17;
$rpindi=90.55;
$nuevo=19.8836;
$res=0;

switch($a){
    case 1:
        $euro=readline('combien ? ');
        $res=$euro*$Lster;
        echo "$res";
        break;
        case 2:
            $euro=readline('combien ? ');
            $res=$euro*$Dus;
            echo "$res";
            break;
            case 3:
                $euro=readline('combien ? ');
                $res=$euro*$Dcan;
                echo "$res";
                break;
                case 4:
                    $euro=readline('combien ? ');
                    $res=$euro*$yen;
                    echo "$res";
                    break;
                    case 5:
                        $euro=readline('combien ? ');
                        $res=$euro*$drmmaroc;
                        echo "$res";
                        break;
                        case 6:
                            $euro=readline('combien ? ');
                            $res=$euro*$rpindi;
                            echo "$res";
                            break;
                            case 7:
                                $euro=readline('combien ? ');
                                $res=$euro*$nuevo;
                                echo "$res";
                                break;
                                
                                    
        
}
    


?>