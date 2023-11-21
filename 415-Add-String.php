<?php 

function addStrings($num1, $num2) {
    $len1 = strlen($num1);
    $len2 = strlen($num2);
    $result = "";
    $carry = 0;
    
    $i = $len1 - 1;
    $j = $len2 - 1;
    
    while ($i >= 0 || $j >= 0 || $carry > 0) {
       
        if($i>=0){
        	$digit1 = (int)$num1[$i];
        }else{
        	$digit1 = 0;
        }
        if($j>=0){
        	$digit2 = (int)$num2[$j];
        }else{
        	$digit2 = 0;
        }
        $sum = $digit1 + $digit2 + $carry;
        $carry = (int)($sum / 10);
        $result = ($sum % 10) . $result;
        
        $i--;
        $j--;
    }
    
    return $result;
}


$num1 = "11";
$num2 = "123";


echo addStrings($num1, $num2); 


 ?>