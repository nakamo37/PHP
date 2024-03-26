<?php
function text($number1, $number2) {
  $value = $number1 * $number2;
  return $value;
}

$total = text(2, 3);
echo $total;

function addnumber($a, $b) {
  $add = $a * $b;
  return $add;
}

$total = addnumber(2, 3);
echo $total;

echo "<br>";

// 合計
function score($score1, $score2, $score3)
{
  $sum = $score1 + $score2 + $score3;
  if ($sum > 210) {
    echo "合計点は" . $sum . "点なので合格です";
  }else {
    echo "合計点は" . $sum . "点なので不合格です";
  }
}

echo (score(80, 60,90));

echo "<br>";

// 面積
function triangle($base, $height)
{
  return $base * $height / 2;
}
function square($base, $height)
{
  return $base * $height;
}
function trapezium($upbase, $lowbase, $height)
{
  return ($upbase + $lowbase) * $height / 2; 
}

echo triangle(7, 8) ."\n";
echo square(5, 5) . "\n";
echo trapezium(4, 5, 4);