<?php   
define("hello","which means fuck off nigger");
echo hello."<br>";

define("previously","testing case sensivity of define constant",true);
echo PREVIOUSLY;

define("constant_g","this means the constant which is defined by the keyword",true);
define("arrayelement",[
    "element0",
    "element1",
    "element2",
    "element3",
    "element4"
]);
echo "<br>";
echo arrayelement[3];
define("AVC",[
    "MBT",
    "TMV",
    "APC",
    "TSV"
]);
echo'<br>';
echo AVC[2];

function global_proof(){
    echo CONSTANT_g;

}
global_proof();