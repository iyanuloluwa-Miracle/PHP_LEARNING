<?php


// Global scope


$name = 'Alice';

function sayHello(){

    global $name;
    //Local Scope
    $name = 'Bob';
    echo 'Hello' . $name;
}


function sayGoodbye(){
    $names = ['Jack', 'Jill'];

    echo $names[0];
}

echo $names[0];
sayGoodbye();


