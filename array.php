<?php

// In PHP, the array() function is used to create an array:
// In PHP, there are three types of arrays:

// Indexed arrays - Arrays with a numeric index
// Associative arrays - Arrays with named keys
// Multidimensional arrays - Arrays containing one or more arrays



#array assigining
// automatic array indexing
$array_named = array('array0', 'array1', 'array2', 'array3'); // variable = keyword_array(array elements)  more or less generelised version 

echo count($array_named) . "<br>";
var_dump($array_named);

// manual array indexing 
$array_manual[0] = "Fredrich";
$array_manual[1] = "Wilhelm";
$array_manual[2] = "Bismark";

echo count($array_manual) . "<br>";
var_dump($array_manual);
