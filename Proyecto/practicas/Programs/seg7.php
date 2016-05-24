<?php
	$cad=$_GET['cad'];
	$ch=str_split($cad);
	$cade="";
	for($x=0;$x<strlen($cad);$x++)
	{
		if(ctype_lower($ch[$x]))
			$wi=(ord($ch[$x])>>1)-20;
		else
			$wi=(ord($ch[$x])>>1)-4;
		$cade=$cade.chr($wi);
	}
	echo $cade;
?>