<?php

// Loops are used to execute the same block of code again and again, as long as a certain condition is true.

// In PHP, we have the following loop types:

// while - loops through a block of code as long as the specified condition is true
// do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true
// for - loops through a block of code a specified number of times
// foreach - loops through a block of code for each element in an array

#while loop
function whileloop($num){

    while($num <= 20){
        echo "the number is : $num"."<br>";
        $num--;
    }
    return $num;
}

// whileloop(998);


#do...while loog


function dowhile($x){

    do{
        echo "the number :$x"."<br>";
        $x--;
    }while($x/2);
}

dowhile(30);

#for loop 
// lets try out a factorial function with for loop
function facto($num){
    $fact = 1;
    
}

?>