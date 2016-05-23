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
			for($y=1;$y<=strlen($cad);$y++)
				echo $y;
			$sal=$sal+(2*$arre[1]);
			echo $sal;
			/*for($y=1;$y<=strlen($cad);$y++)
			{
					$sal=$sal+($y*$arre[$y--]);
			}
			echo $sal;*/
		}
		else
		{
			echo 'Valores incorrectos';
		}
	}
	else
	{
		if($i%2==0)
			{
				$sal+=$i*(int)$arre[$i--];
			}
			else
			{
				
			}
	}
?>