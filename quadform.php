<?php

$x = array(2,3,4);

function quad($x)
{
	$disc = pow($x[1],2)-4*$x[0]*$x[2];
	if ($disc<0)
	{
	  $disc = sqrt(-1*$disc);
	  $real1 = -$x[1]/(2*$x[0]);
	  $imag1 = $disc/(2*$x[0]);
	  $imag2 = -$disc/(2*$x[0]);
	  echo $real.$imag1."j";
	  echo $real1.$imag2."j";
	}
	else
	{
		$disc=Sqrt($disc);
		$root1=($x[1]+$disc)/(2*$x[0]);
		$root2=(-$x[1]-$disc)/(2*$x[0]);
		echo $root1;
		echo $root2;
	}
	if($x[0]<0)
	{
		echo "Opens Down";
	}
	else
	{
		echo "Opens Up";
	}
}

quad($x);	

?>
