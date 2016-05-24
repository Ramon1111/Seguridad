<?php
	$num=$_GET['num'];
	$cod=$_GET['cod'];
	if($cod=='c')
	{
		$len=strlen($num);
		$can=ceil($len/2);
		$nocan=$len-$can;
		$pal1=substr($num,0,$can);
		$pal2=substr($num,$can,$nocan);
		echo $pal2.$pal1;
	}
	else
	{
		$len=strlen($num);
		$can=ceil($len/2);
		$nocan=$len-$can;
		$pal1=substr($num,0,$nocan);
		$pal2=substr($num,$nocan,$can);
		echo $pal2.$pal1;
	}
?>