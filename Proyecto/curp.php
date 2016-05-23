<?php
if(isset($_POST['num'])&&isset($_POST['anio']))
{
	$num=$_POST['num'];
	$anio=$_POST['anio'];
	$num=strtoupper($num);
	$arre=str_split($num);
	$long1=strlen($num);
	$long2=strlen($anio);
	echo $num.'<br/>';
	if($long1==18&&$long2==4&&preg_match('/^[0-9]{4}$/',$anio))
	{
		if($anio<2000)
			$select='0';
		else
			$select='A';
		if($select==$arre[16])
		{
		
			for($i=0;$i<18;$i++)
			{
				if(preg_match('/^[A-N]$/',$arre[$i]))
				{
					$car=ord($arre[$i])-55;
					$arre[$i]=$car;
				}
				if(preg_match('/^[Ñ]$/',$arre[$i]))
				{
					$car=24;
					$arre[$i]=$car;
				}
				if(preg_match('/^[O-Z]$/',$arre[$i]))
				{
					$car=ord($arre[$i])-54;
					$arre[$i]=$car;
				}
				if(preg_match('/^[0-9]$/',$arre[$i]))
				{
					$car=$arre[$i];
					$arre[$i]=$car;
				}
			}
			$cont=18;
			$resul=0;
			for($i=0;$i<16;$i++)
			{
				$resul+=$cont*$arre[$i];
				$cont--;
			}
			$resul=$resul%10;
			$resul=10-$resul;
			if(substr($num,-1,1)==$resul)
				echo 'CURP válido e.e';
			else
				echo 'CURP inválido u.u';
		}
		else
			echo 'Incoincidencia con el año de nacimiento';
	}
	else
	{
		echo 'Valores dados incorrectos';
	}
}
else
	echo 'Valores dados incorrectos';
?>