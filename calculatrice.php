<?php
$num1=0;
$num2=0;
$op='i';
while($op!='q'){
    $num1=(float)readline();
    $op=(string)readline();
    $num2=(float)readline();
switch($op){
    case '+':
        $result=$num1+$num2;
        echo "= $result \n";
        break;
    case '-':
        $result=$num1-$num2;
        echo "= $result \n";
        break;
    case '*':
        $result=$num1*$num2;
        echo "= $result \n";
        break;
    case '/':
        $result=$num1/$num2;
        echo "= $result \n";
        break;
    case 'q':
        echo 'au revoir';
        break;
        
}
}