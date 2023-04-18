<?php
$entrée = (float)readline('entrer nombres :');
if($entrée==0){
    echo 'nul';
}
elseif($entrée > 0) {
    echo 'positif';
}
else{echo 'negatif';
}
?>