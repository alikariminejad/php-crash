<?php
$fruits = ['orange','apple','pear'];

// get the length
// echo count($fruits);

// Search array
// echo var_dump(in_array('orange',$fruits));

// add to array
$fruits[] = 'grape';
// array_push($fruits, 'banana','blueberry');
// array_unshift($fruits,'mango');

// remove from array
// array_pop($fruits);
// array_shift($fruits);
// unset($fruits[2])
// print_r($fruits);

// $chuncked_array = array_chunk($fruits, 3);
// print_r($chuncked_array);

// $arr1 = [1,2,3];
// $arr2 = [4,5,6];

// $arr3 = array_merge($arr1, $arr2);
// $arr4 = [...$arr1, ...$arr2];


// print_r($arr4);

$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];
$c = array_combine($a,$b);
// print_r($c);
$keys = array_keys($c);
// print_r($keys);
$fillped = array_flip($c);
// print_r($fillped);
$numbers = range(1,5);
// print_r($numbers);
$new_numbers = array_map(function($number){
    return "Number ${number}";
}, $numbers);
// print_r($new_numbers);
$lessThan3 = array_filter($numbers, fn($number) => $number <=3);
// print_r($lessThan3);
$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);
var_dump($sum);