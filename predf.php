<?php

function string($param1,$param2,$param3){
    echo '<br>'. strlen($param1);
    echo '<br>'. strpos($param1,$param2);
    echo '<br>'. strrev($param1);
    echo '<br>'. str_replace($param1,$param2,$param3);
    echo '<br>'. str_word_count($param1);
    // echo '<br>'. hex2bin($param1);
}

// string('words',null,null);
// string('what in the name of shit','name',null);
// string('awa a wang',null,null);
string('fucking', 'world', 'hello fucking');
echo "<br><br>";

function number($x,$y,$z,$a,$b){
    //there are different data types of number
    # integer types which do not contain any decimal point 
    var_dump($x);
    echo "<br>";
    // there is also predefined functions for finding out weather the value is integer or not
    var_dump(is_int($x));
    echo "<br>";
    var_dump(is_long($x)); //for bigger integer number
    echo "<br>";
    # float types are the one who contains decimal point
    var_dump(is_float($y));
    echo "<br>";
    var_dump(is_double($y));
    echo "<br>";
    # there is also a NAN type stands for Not A Number
    var_dump(is_nan($a));echo "<br>";
    # Infinite type is exactly as it sounds the value of such type is uncountable
    var_dump(is_infinite($z));echo "<br>";
    # there is also numerical strings which is numbers potraited as strings
    var_dump(is_numeric($b));echo "<br><br>";
}

number(49,50.8,1.9e234565,acos(6),"4234");

function math($var){

    echo "the circumfarance is".(abs(2*pi()*($var*$var)));
    echo "<br>";
    echo(sqrt($var));
    echo "<br>";
    echo(abs(round(rand(-5,10))));
    echo "<br>";
    echo (round(19.02));

}
math(9);

