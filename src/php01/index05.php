<?php
for ($i = 0; $i < 4; $i++) {
  echo $i;
}

echo "<br>";

// for ($i = 2; $i <5; $i+2) {
//   echo $i;
// }

for ($i = 1; $i <= 5; $i++) {
  echo $i * 2 . '<br>';
}

echo "<br>";

$i = 0;

while ($i < 3) {
  echo 'i = ' . $i . '<br>';
  $i += 1;
}

echo "<br>";

$count = 0;

while ($count <20) {
  $count += 1;
  echo $count . 'br';
}

echo "<br>";

$i = 0;
while ($i < 10) {
  if ($i == 5) {
    break;
    // continue;
  }
  echo $i;
  $i++;
}

echo "<br>";

$count = 0;
while ($count <= 100) {
  if ($count === 20) {
    break;
  }
  if ($count % 3 === 0) {
    $count++;
    continue;
  }
  echo $count . '<br>';
  $count++;
}

echo '<br>';

$i = 0;
do {
  echo $i . '<br>';
  $i++;
}while ($i < 5);

echo '<br>';

$nume = 0;
do {
  echo 'nume = ' . $nume . '<br>';
  $nume += 1;
}while ($nume < 3);

echo '<br>';

// FizzBuzz
$Fizz = 'Fizz';
$Buzz = 'Buzz';
$FizzBuzz = 'FizzBuzz';

for ($i = 1; $i <= 50; $i++) {
  if ($i % 15 == 0) {
    echo $FizzBuzz;
  } elseif ($i % 3 == 0){
    echo $Fizz;
  } elseif ($i % 5 == 0) {
    echo $Buzz;
  }else {
    echo $i;
  }
}

// 二重ループ
for ($i = 1; $i < 6; $i++) {
  for ($j = 1; $j < 6; $j++) {
    echo "●";
  }
  echo "<br>";
} 