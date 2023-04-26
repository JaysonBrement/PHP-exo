<?php
$vownbr=0;
$tab=['a','e','i','o','u','y','A','E','I','O','ô','U','Y','û','ê','è','é','â','à'];
$text=(string)readline('tapez votre phrase :');
$lenghth=strlen($text);
foreach($tab as $pos=>$lettre){
    $vownbr=$vownbr+substr_count($text,$lettre);
}
echo "$vownbr";


?>