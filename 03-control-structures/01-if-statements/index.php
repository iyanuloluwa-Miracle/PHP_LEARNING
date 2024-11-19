<?php


$age = 16;
// If statement

// if($age >=21){
//     // echo 'You are old enough to drink in the US';
// }

// If-Else

// if ($age >= 21) {
//     echo 'You are old enough to drink in the US';
// }else{
//     echo 'You are Not old enough to drink in the US';
// }
// Nested if statement
if($age >=21){
    echo 'You are old enough to drink and Vote in the US';

}else{
    if($age >=18){
        echo 'You are old enough to vote in the US';
    } else {
        echo 'You are Not old enough to drink or vote in the US';
    }
}


// If-Else-If
if ($age >= 21) {
    echo 'You are old enough to drink and Vote in the US';
} else {
    if($age >=18){
        echo 'You are old enough to Vote in the US';
    }else{
        echo 'You are Not old enough to drink or Vote in the US';
    }

}


