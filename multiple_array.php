<?
echo multiple_array([2,4,6,7,8,8]);

function multiple_array($array){
  $result = 0;
  foreach ($array as $num) {
    $result *= $num;
  }
  return $result;
}
