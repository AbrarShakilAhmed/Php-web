<?php

function para($text,$color="red"){
  echo "<p style='color:$color;font-size:42px;'>$text</p>";
}

$temp = " Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut esse, soluta velit veniam facilis nostrum ";

para("$temp","red");

?>

