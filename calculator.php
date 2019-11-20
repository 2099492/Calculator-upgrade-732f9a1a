<?php
echo "Welke operatie wil je uitvoeren? (+, -, %)" . PHP_EOL;
$a = readline();
if ($a != "+" && $a != "-" && $a != "%" ) {
  echo $a . "is geen geldige operatie";
  exit;
}
echo "Eerste getal?" . PHP_EOL;
$b = readline();
if ($b != is_numeric($b)) {
  echo $b . "is geen getal";
  exit;
}
echo "Tweede getal?" . PHP_EOL;
$c = readline();
if ($c != is_numeric($c)) {
  echo $c . "is geen getal";
  exit;
}

if ($a == "+"  ) {
   echo $b + $c;
}
if ($a == "-") {
   echo $b - $c;
}
if ($a == "%") {
   echo $b % $c;
}

 ?>
