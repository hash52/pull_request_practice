<?php
echo multiple_array([2,4,2,4]);


function multiple_array($array){
  $result = 1;
  foreach ($array as $num) {
    $result *= $num;
  }
  return $result;
}

