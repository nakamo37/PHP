<?php
$a = 15;
$b = 3;
$c = 10;
$d = 5;

echo $a + $b;
echo "<br>";
echo $a - $b;
echo "<br>";
echo $a * $b;
echo "<br>";
echo $a / $b;
echo "<br>";
echo $a - $c;

$a = $b;
$c += $d;

echo $a;
echo "<br>";
echo $c;
echo "<br>";

$a = 20;
$b = 5;

echo ($a > $b);
echo "<br>";

echo "<br>";
echo ($a > 10 && $a < 30);
echo "<br>";

$a = $b = 10;
$c = $d = 5;

echo "++$a";
echo "<br>";
echo "$b++";
echo "<br>";
echo "--$c";
echo "<br>";
echo "$d--";
echo "<br>";
