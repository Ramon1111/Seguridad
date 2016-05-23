<?php
	$cad=$_GET['cad'];
	$llav=$_GET['llave'];
	$cod=$_GET['cod'];
	function camb($c,$x){
		$ch=(int)$x;
		$res="";
		$arre=str_split($c);
		for($t=0;$t<strlen($c);$t++)
		{
			$ch=(int)$x;
			$ch=chr($ch+$t);
			$res=$res.$ch.$arre[$t];
		}
		echo $res;
	}
	function nocamb($c,$x)
	{
		$ch=(int)$x;
		$res="";
		$arre=str_split($c,2);
		$war=strlen($c);
		foreach($arre as $p)
		{
			$arre2=str_split($p);
			
			array_shift($arre2);
			$res=$res.$arre2[0];
		}
		echo $res;
	}
	if($cod=='c')
		camb($cad,$llav);
	else
		nocamb($cad,$llav);
?>