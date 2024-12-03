<?php
function registerUser($name){
    echo $name . ' registered.';
}

// registerUser($name='Ali');

function sum($n1=4, $n2=5){
    return $n1 + $n2;
}

$number = sum();
// echo $number;

$subtract = function($n1,$n2){
    return $n1 - $n2;
};

// echo $subtract(5,8);

$multiply = fn($x1,$x2) => $x1*$x2;

echo $multiply(5,3);