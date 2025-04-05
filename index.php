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
?>