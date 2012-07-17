<?php

$num1 = 9;
$num2 = 64;

function add($num1,$num2)
{
	echo "9 plus 64 equals:",$num1 + $num2.PHP_EOL;
	subtract($num1,$num2);
}

function subtract($num1,$num2)
{
	echo "64 minus 9 equals:", $num2 - $num1.PHP_EOL;
	multiply($num1,$num2);
}

function multiply($num1,$num2)
{
	echo "9 times 64 equals:", $num1 * $num2.PHP_EOL;
	divide($num1,$num2);
}

function divide($num1,$num2)
{
	echo "9 divided by 64 equals:", $num1 / $num2.PHP_EOL;
	squareroot($num1,$num2);
}

function squareroot($num1,$num2)
{
	echo "Square root of 9 and 64 are:", sqrt($num1).",".sqrt($num2).PHP_EOL;
	power($num1,$num2);
}

function power($num1,$num2)
{
	echo "The power of 9^64 is:", pow($num1,$num2).PHP_EOL;
	echo "The power of 64^9 is:", pow($num2,$num1).PHP_EOL;
}

add($num1,$num2);
?>