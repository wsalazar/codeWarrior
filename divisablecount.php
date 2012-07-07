<?php

function mathcount ()
{
	for($num =1; $num <= 10; $num ++)
	{
		if ($num % 3 ==0||$num % 5 ==0)
		{
			echo $sum+=$num;
		}
	}
	$sum = 0;
	
	for($num =1; $num <= 100; $num ++)
	{
		if ($num % 3 ==0||$num % 5 ==0)
		{
			echo $sum+=$num;
		}
	}
	$sum = 0;
	
	for($num =1; $num <= 1000; $num ++)
	{
		if ($num % 3 ==0||$num % 5 ==0)
		{
			echo $sum+=$num;
		}
	}
}

mathcount();

?>