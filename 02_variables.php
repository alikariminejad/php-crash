<?php
/* --------------------  PHP Data Types  -------------------- */
/*
- String         Series of characters surrounded by quotes
- Integer        Whole numbers
- Float          Decimal numbers
- Boolean        true of false
- Array          Special variable, which can hold more than one value
- Object         A class
- NULL           Empty variable
- Resource       Special variable that holds a resource
*/

/* --------------------  Variable Rules  -------------------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- Variables can't start with a number
- Variables can only contain alpha-numeric characters and underscore(A-z, 0-9 and _)
- Variables are case-sensitive ($name and $NAME are two different variables)
*/

$name = 'Ali'; // string
$age = 26;  // integer
$is_male = true;  // boolean
$cash_in_hand = 105.50; // float

// var_dump($is_male);

// echo $name .' is' .' ' . $age . ' years old';

// echo "${name} is ${age} years old.";

$x = '5' + '2';  // 7
// var_dump($x);

// operators
// echo 5 + 6
// echo 5 * 2;
// echo 5 - 2;
// echo 10 / 2;
// echo 10 % 3;

// constants that you know never gonna change you can use define()
define('HOST', 'localhost');
define('DB_NAME', 'dev_db');
echo DB_NAME;

?>
