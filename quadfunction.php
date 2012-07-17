<?php

$num = Array(-2,3,4);

function quad ($num)
{
	$disc = pow($num[1],2)-4*$num[0]*$num[2];
	if($disc<0)
	{
	    quad3($disc,$num);
	}
	else
	{
		quad2($disc,$num);
	}
}

function quad2($disc,$num)
{
	$disc=Sqrt($disc);
	$root1=($num[1]+$disc)/(2*$num[0]);
	$root2=(-$num[1]-$disc)/(2*$num[0]);
    echo $root1.PHP_EOL.$root2.PHP_EOL;
	
	
	if($num[0]<0)
	{
		echo "Opens Down";
	}
	else
	{
		echo "Opens Up";
	}
}

function quad3 ($disc,$num)
{
	$disc = sqrt(-1*$disc);
	$real1 = -$num[1]/(2*$num[0]);
	$imag1 = $disc/(2*$num[0]);
	$imag2 = -$disc/(2*$num[0]);
	echo $real1.$imag1."j".PHP_EOL. $real1.$imag2."j";
}
	  

quad($num);

?>



