<?php
echo "Мой первый php-код";
echo(rand(10, 10));
$x = 10;
$y = 6;
echo $x + $y;

$favcolor = "Красный";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
