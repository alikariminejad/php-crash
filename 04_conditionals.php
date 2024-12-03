<?php

/* ---------------------operators-------------------------- */

/*
< less than
> greater than
<= less than or equal to
>= greater than or equal to
== equal to
=== identical to
!= not equal to
!== not equal to
*/

/* If statement syntax
if (condition){
    // code to be executed if condition is true
}
*/

$age = 20;

// if ($age >= 18){
//     echo 'You are old enough to vote';
// } else {
//     echo 'sorry, you are not old enough to vote';
// }

// $t = date("H");

// if ($t < 12){
//     echo 'Good Morning';
// } elseif ($t < 17){
//     echo 'Good Afternoon';
// }else {
//     echo 'Good Evening';
// }


$posts = ['first post'];

// if (!empty($posts)){
//     echo $posts[0];
// }else{
//     echo 'No posts!';
// }

// echo !empty($posts) ? $posts[0] : 'No Posts';
// $firstpost = !empty($posts) ? $posts[0] : 'No Posts';
// $firstpost = $posts[0] ?? null;
// echo $firstpost;


$favcolor = 'red';

switch($favcolor){
    case 'red':
        echo 'Your favorite color is red';
        break;
    case 'blue':
        echo 'Your favorite color is blue';
        break;
    case 'green':
        echo 'Your favorite color is green';
        break;
    default:
        echo 'Your favorite color is not green, blue or red';
}