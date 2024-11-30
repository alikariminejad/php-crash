<?php
// Simple Array
$numbers = [1,2,3,4,5,6];
$fruits = array('apple','orange','banana');
// var_dump($fruits);
// echo $fruits[2];  // banana

// Associative Array
$colors = [
    1 => 'blue',
    2 => 'red',
    3 => 'new_color'
];

// echo $colors[2];  // red

$hex = [
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '#00f'
];

// echo $hex['blue'];

$person = [
    'first_name' => 'Ali',
    'last_name' => 'Kariminejad',
    'email' => 'kariminejad.ali.ak@gmail.com'
];

// echo $person['email'];

$people = [
    [
        'first_name' => 'Ali',
        'last_name' => 'Kariminejad',
        'email' => 'kariminejad.ali.ak@gmail.com'
    ],
    [
        'first_name' => 'Ali',
        'last_name' => 'Karim',
        'email' => 'karim@gmail.com'
    ],
    [
        'first_name' => 'Ali',
        'last_name' => 'nejad',
        'email' => 'nejad.ali.ak@gmail.com'
    ]
    ];

// echo $people[2]['last_name'];

var_dump(json_encode($people));
?>