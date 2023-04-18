

<?php
$p = $x = readline('nb1 :');
$q = $y = readline('nb2 :');

while ($x != $y) {
  if ($x > $y)
    $x = $x - $y;
  else
    $y = $y - $x;
}

echo "GCD of $p and $q is: $x";
?>

