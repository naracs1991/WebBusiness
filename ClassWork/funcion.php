<?php
function mcd($a,$b) {
 while (($a % $b) != 0) {
  $c = $b;
  $b = $a % $b;
  $a = $c;
 }
 return $b;
}

function mcm($a,$b) {
 return ($a * $b) / mcd($a,$b);
}

?>
