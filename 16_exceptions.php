<?php

/*------------Exception-----------*/

/*
PHP has an exceptional model similar to that of other prograaming languages.
An exception can be thrown, and caught("catched") within PHP. Code may be surrounded in a
try block, to facilitate the catching of potential exceptions. Each try must have at least one
corresponding catch or finally block.
*/

function inversion($x){
    if (!$x){
        throw new Exception('Division by zero');
    }
    return 1/$x;
}

// echo inversion(0);
try{
    echo inversion(5);
    echo inversion(0);
}catch(Exception $e){
echo 'Caught Exception: ', $e -> getMessage(), ' ';
}finally{
    echo 'first finally';
}

try{
    echo inversion(5);
    echo inversion(0);
}catch(Exception $e){
echo 'Caught Exception: ', $e -> getMessage(), ' ';
}finally{
    echo 'second finally';
}


echo 'Hello World';