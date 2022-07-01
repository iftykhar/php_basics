<?php

// Loops are used to execute the same block of code again and again, as long as a certain condition is true.

// In PHP, we have the following loop types:

// while - loops through a block of code as long as the specified condition is true
// do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true
// for - loops through a block of code a specified number of times
// foreach - loops through a block of code for each element in an array

#while loop

// while (condition is true) {
//     code to be executed;
//   }
function whileloop($num)
{

    while ($num <= 20) {
        echo "the number is : $num" . "<br>";
        $num--;
    }
    return $num;
}

// whileloop(998);


#do...while loog

// do {
//     code to be executed;
//   } 

function dowhile($x)
{

    do {
        echo "the number :$x" . "<br>";
        $x--;
    } while ($x / 2);
}

// dowhile(30);

#for loop 
// lets try out a factorial function with for loop

// for (init counter; test counter; increment counter) {
//     code to be executed for each iteration;
//   }
function facto($num)
{
    $fact = 1;

    for ($i = 1; $i <= $num; $i++) {
        $fact = $fact * $i;
    }
    $num = $fact;
    echo $num;
    return $num;
}

// facto(8);

#foreach loop 
// The foreach loop works only on arrays, and is used to loop through each key/value pair in an array.
// foreach ($array as $value) {
//     code to be executed;
//   }

$ass = array('hitler' => '1945', 'stalin' => '1953', 'mao' => '1970', 'kim' => '2011');

foreach ($ass as $value => $x) {
    echo "$value = $x <br>";
}

#break and continue
// break statement can also be used to jump out of a loop
function breakpoint()
{
    for ($i = 0; $i < 10; $i++) {
        if ($i == 5) {
            // break; #Stops the execution at the condition
            continue;
        }
        echo "the number is: $i <br>";
    }
}

breakpoint();
