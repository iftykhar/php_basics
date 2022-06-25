<?php 

echo "procedural programming ";
echo "<br>";

// variable writing using "$" for variable in php

$prcd = "procedural";
$lang = "PHP";

echo "lets try out some $prcd"." $lang language"."<br>";
/* the word "echo" is the equivalent of printf in c and also other language printing method
to print out any character number as a string or array in some cases we use "echo".
*/
#sinlge line comment
// another single line comment on php

#going to try out variable for now
// think of variable as a container for storing values 
// the sign "$" is used to assign the variable

$text_01 = 'single qoute text vairable ';
$text_02 = "double qoute text variable ";
$number = 10;
echo "<br><br>";
echo "we are now useing $text_02";
echo "<br>";
echo 'now using '. $text_01.'<br>';
echo $number + 10;

// variable scope of PHP 
/*there are three types of scope of variable in PHP
    1.Global 
    2.Local
    3.Static */

    $x = 5; // global scope

    function myTest() {
      // using x inside this function will generate an error
      echo "<p>Variable x inside function is: $x</p>";
    }
    myTest();
    
    echo "<p>Variable x outside function is: $x</p><br>";

    // global scope variable   
    $g_var = "gobal value";

    function g_teste(){
        global $g_var;// with  the keyword "global" we can use global variable  into local variable
        //there should be an error using the globar variable inside the function
        echo "<h2>Variable g_var inside functino is: $g_var</h2><br>";
    }

    g_teste();
    echo "<h2>variable g_var used outside the function is: $g_var</h2><br>";

// local variable scope 
    function local_test(){
        $l_var = "function variable";
        echo "you shall not pass $l_var <br>";
    }
    local_test();
    echo "<h2>testing local $l_var</h2>"; 

    //global array 

$x = 5;
$y = 10;

function globnal_array() {
  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

globnal_array();
echo "$y<br>"; // outputs 15

$a = 10250;
$b = 24000;
$c = 9000;

function calc(){
  $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
}
calc();
echo $b;

function stat_test(){
  static $i = 0;
    echo $i;
    $i++;
}

echo '<br>';
stat_test();echo '<br>';
stat_test();echo '<br>';
// stat_test();echo '<br>';
// stat_test();echo '<br>';
// stat_test();echo '<br>';
// stat_test();echo '<br>';
// echo $i;

// echo('hello');
// print 'hola';

/*PHP Data Types
Variables can store data of different types, and different data types can do different things.

PHP supports the following data types:

String
Integer
Float (floating point numbers - also called double)
Boolean
Array
Object
NULL
Resource */

// String practice on the PHP 
function str_prac(){
$s_string = 'single quote string'; 
$d_string = "double quote string";
echo "$d_string <br>"; // in a double quote string value of bothe string and a variable can be recognised by the PHP.
echo $s_string .'<br>'; //notice here we are not writing the variable directly into the single quote because single quote only takes string values and can't differentiate string value from a variable type
}

str_prac();

$i = 100000; //integer data type
$f = 2.06; //float data type
$bul = TRUE; //boolean data type

$org = array('lungs','heart','kidney');

print_r($org);
echo "<br>";
var_dump($org);
echo "<br>";
var_dump($bul);// testing the data type with the keyword var_dump
echo "<br>";
var_dump($f);
echo "<br>";
var_dump($i); // testing the data type with the keyword var_dump


