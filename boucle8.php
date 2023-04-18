<?php
$sexe=(string)readline('sexe');
$age=(int)readline('age');
if(($sexe=='masculin') and ($age>20)){
    echo "imposable";
}
elseif($sexe=='féminin' and $age>18 and $age<35){
    echo "non imposable";
}
else{
    echo "non imposable";
}


?>