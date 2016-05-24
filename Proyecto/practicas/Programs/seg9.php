<?php
	$cad=$_GET['cad'];
	$code=$_GET['isbn'];
	if($code=='d')
	{
		if(strlen($cad)==10||strlen($cad)==11)
		{
			$sal=0;
			$arre=str_split($cad);
			for($i=0;$i<strlen($cad);$i++)
				$arre[$i]=(int)$arre[$i];
			for($y=1;$y<strlen($cad);$y++)
			{
				$r=$y-1;
				$sal=$sal+($y*$arre[$r]);
			}
			$sal=$sal%11;
			
			if(strlen($cad)==10)
			{
				$c=$arre[9];
				if($c==$sal)
					echo 'Correcto.<br/>Valor: '.$sal;
				else
					echo 'Valores incorrectos';
			}
			if(strlen($cad)==11)
			{
				$c=$arre[9].$arre[10];
				$c=(int)$c;
				echo $c;
				if($c==$sal)
					echo 'Correcto.<br/>Valor final: '.$sal;
				else
					echo 'Valores incorrectos';
			}
		}
		else
		{
			echo 'Valores incorrectos';
		}
	}
	else
	{
		if(strlen($cad)==13)
			{
				$sal=0;
				$arre=str_split($cad);
				for($i=0;$i<strlen($cad);$i++)
					$arre[$i]=(int)$arre[$i];
				for($y=1;$y<strlen($cad);$y++)
				{
					$r=$y-1;
					if($y%2==0)
						$sal=$sal+(3*$arre[$r]);
					else
						$sal=$sal+($arre[$r]);
				}
				$res=10-($sal%10);
				if($res==$arre[12])
					echo 'Correcto.<br/>Valor final: '.$res;
				else
					echo 'Valores incorrectos';
			}
		else
		{
				echo 'Valores incorrectos';
		}
	}
?>