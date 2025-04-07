<?php

// function para($text,$color="red"){
//   echo "<p style='color:$color;font-size:42px;'>$text</p>";
//   echo "<p style='color:$color;font-size:42px;'>$text</p>";
//   echo argu
// }

// $temp = " Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut esse, soluta velit veniam facilis nostrum ";

// para($temp,"red");

function app(...$args) {
    // Print the arguments passed to the function
    print_r($args);
}

$news = 'app';

echo $news(23, 34, 234, 2); // This will call the function and print the arguments
;

?>

