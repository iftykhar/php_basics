<?php

// In PHP, the array() function is used to create an array:
// In PHP, there are three types of arrays:

// Indexed arrays - Arrays with a numeric index
// Associative arrays - Arrays with named keys
// Multidimensional arrays - Arrays containing one or more arrays



#array assigining

#indexed array
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

echo "<br><br>";

$bus = array("Voxwagon", "BRTC", "Schoolbus");
$arrlength1 = count($bus);
for ($i = 0; $i < $arrlength1; $i++) {
    echo $bus[$i];
    echo "<br>";
}

#Associative Arrays
// Associative arrays are arrays that use named keys that you assign to them.

// auto indexed associatative array
$age = array("Ben" => "23", "Saiful" => "30", "Hinrich" => "22");

// manual indexing associative array
$age2["Bein"] = "40";
$age2["Shaf"] = "50";
$age2["Himler"] = "40";

var_dump($age);
echo "<br>";
var_dump($age2);
echo "<br>";
foreach ($age2 as $key => $value) {
    echo "name:.$key age: $value<br>";
}
