<?php
function One(){
  echo "working 1 function";
}

$test = 'One';

function Two(){
  global $test;
  $test();
}

echo strlen("sjdhadhasdhahsd                                ");

// Two();