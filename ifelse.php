<?php

#conditionals
// we are going to learn about the conditionals at first hand in here

// if(1>3){
// echo "faltu";
// }else{
//  echo "faltu na";
// }

function season($v){
    if($v == 'january'){
    echo 'winter season';
}elseif($v == 'february'){
    echo 'winter season';
}elseif($v == 'march'){
    echo 'summer season';
}elseif($v == 'april'){
    echo 'summer season';
}elseif($v == 'may'){
    echo 'summer season';
}elseif($v == 'jun'){
    echo 'rainy season';
}elseif($v == 'july'){
    echo 'rainy season';
}elseif($v == 'august'){
    echo 'fall season';
}elseif($v == 'september'){
    echo 'fall season';
}elseif($v == 'october'){
    echo 'spring season';
}elseif($v == 'november'){
    echo 'spring season';
}elseif($v == 'december'){
    echo 'winter season';
}

}


season('may');
echo "<br>";



// function FirstFactorial($num) {

//     $n = 1;
//     // code goes here
//     for($i=1;$i<=$num;$i++){
//     //   
//       $n = $n *$i;
//     }
//     echo $n;
//     return $n;
  
//   };
   
//   FirstFactorial(8);

#switch case break default
function swittch($var){
    switch($var){
    case 98:
        echo "windows 98";
        break;
    case 11:
        echo "windows 11";
        break;
    default;
        echo "windows 7";
}
}

swittch(8);
echo "<br>";
swittch(11);
