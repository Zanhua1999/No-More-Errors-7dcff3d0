<?php
$input = $argv[1];
$input = intype($input);
$wisselgeld = array(50, 20, 10, 5, 2 , 1 , 0.5, 0.2, 0.1, 0.05);
foreach ($wisselgeld as $value) {
    $amount = floor($input/$value);
    if ($amount != 0) {
        $input -=($amount * $value);
        if ($value >= 1){ 
            echo "\n $amount x  $value euro ";
        }
        else{
            $value*=100;
            echo "\n $amount x $value cent";
        }
    }
}
function intype($result){
    return round($result/0.05)*0.05;   
}
?>