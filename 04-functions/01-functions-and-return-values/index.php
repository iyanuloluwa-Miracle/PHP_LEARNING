<?php 

function sayHello()
{
    echo 'Hello World';
}


function sayGoodbye()
{
    return 'Goodbye';
}

$goodbye = sayGoodbye();




sayHello();
echo $goodbye;
