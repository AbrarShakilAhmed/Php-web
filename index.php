<?php

$arr = [["lion",23,23000],
          ["Sujon",34,34000],
          ["sadin",56,42353],
          ["manik",23,234234]];

$refineArr = [];


foreach($arr as $single){
  if($single[1]<100){
    array_push($refineArr,$single);
  }
}

print_r($refineArr);



// fizzzBuzz pblm in php

// div 3 = fizz
// div 5 = fizzz
// both = fizzzBuzz



for($i=1;$i<=100;$i++){
  if($i%15==0){
    echo "fizzBuzz";
    echo "<br>";
  }elseif($i%3==0){
    echo "fizz";
    echo "<br>";

  }elseif($i%5==0){
    echo "Buzz";
    echo "<br>";

  }else{
    echo $i;
    echo "<br>";


  }
}

?>