<?php
	$cad=$_GET['cad'];
	$ch=str_split($cad);
	$cade=0;
	for($x=0;$x<strlen($cad);$x++)
	{
		$wi=ord($ch[$x]);
		$cade+=$wi;
	}
	echo $cade;
?>