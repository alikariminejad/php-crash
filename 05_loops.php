<?php
/* ----------For Loop--------------*/

/*
** For Loop Syntax
for (intialize; condition; increment){
    // code to be executed
}
*/

// for ($x = 0; $x <= 10; $x++){
//     echo 'Number ' . $x . '<br>';
// }


/* -----------While Lopp------------*/
/*
** While Loop Syntax
while(condition){
    // code to be executed
}
*/
// $x = 1;
// while($x <= 14){
//     echo 'Number ' . $x . '<br>';
//     $x++;
//}


/*-----------Do while loop----------*/
/*
** Do While Loop Syntax
do{
    //code to be executed;
}while(condition);

do...while loop will always execute the block of code once,
even if the condition is false.
*/

// $x = 6;
// do{
//     echo 'Number ' . $x . '<br>';
//     $x++;
// }while($x <= 5);


/* -----------Foreach Loop------------*/

/*
** Foreach Loop Syntax
foreach($array as $value){
    //code to be executed;
}
*/

$posts = ['first', 'second', 'third'];

// for($x = 0;$x < count($posts);$x++){
//     echo $posts[$x] . ' post' . '<br>';
// }

// foreach($posts as $index => $post){
//     echo $index + 1. ' -- ' . $post . ' post' . '<br>';
// }

$person = [
    'first_name' => 'Ali',
    'last_name' => 'Kariminejad',
    'email' => 'kariminejad.ali.ak@gmail.com',
];
foreach($person as $key => $value){
    echo $key . " -- " . $value . '<br>';
}