<?php

/*-----------Object Oriented Programmin-------------*/
/*
From PHP5 onwards you can wite php in either procedural or object oriented way. OOP Consists of classes
that can hold "properties" and "methods". Objects can created from classes.
*/

Class User{
    // Properties are attrubutes that belong to a class

    //Access Modifiers: public, private and protected
    // public - can be accessed from anywhere
    // private - can only be accessed from inside the class
    // protected - can only be accessed from inside the class and by inheriting class
    public $name;
    public $email;
    public $password;

    // A Constructor is a method that runs when an object is created
    public function __construct($name, $email, $password){
        echo "Object is instantiated!!";
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    // Method is a function that belongs to a class
    function set_name($name){
        $this->name = $name;
    }

    function get_name(){
        return $this->name;
    }
}

// Instantiate a user object
$user1 = new User('Ali', 'ali@gmail.com', '232');

$user1 -> name = 'Ali';
$user1 -> email = 'Kariminejad.ali.ak@gmail.com';

$user1->set_name('New Name');

// var_dump($user1);
// echo $user1->get_name();

// Inheritance
Class Employee extends User{
    public function __construct($name, $email, $password, $title)
    {
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }

    public function get_title(){
        return $this->title;
    }
}

$employee1 = new Employee('a', 'b', 'c', 'boss');

echo $employee1->get_title();