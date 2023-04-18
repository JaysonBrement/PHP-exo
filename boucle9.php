<?php

$année=(string)readline('année :');

if(is_float($année/4)){
    echo 'non bissextile';
}
elseif(is_float($année/400)){
    echo 'non bissextile';
}
else{
    echo 'bissextile';
}

?>