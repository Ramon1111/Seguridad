<?php
	$t=$_GET['tex'];
	$n=$_GET['num'];
	$c=$_GET['cod'];
	if($c=='c')
	{
		$cad=array();
		$arreglo=array();
		$cont=strlen($t);
		for($i=0;$i<$cont;$i++)
		{
			$car=substr($t,$i,1);
			array_push($cad,$car);
		}
		$mul=ceil($cont/$n);
		$contadorpal=0;
		for($x=0;$x<$mul;$x++)
		{
			$eje=array();
			for($y=0;$y<$n;$y++)
			{
				if($contadorpal<$cont)
					array_push($eje,$cad[$y]);
				else
					array_push($eje,'');
				$contadorpal++;
			}
			array_push($arreglo,$eje);
			for($g=0;$g<$n;$g++)
				if($cad!='\0')
					array_shift($cad);
		}
		$grr=array();
		for($y=0;$y<$n;$y++)
			for($x=0;$x<$mul;$x++)
				array_push($grr,$arreglo[$x][$y]);
		$grr=implode("",$grr);

		$h='Texto: '.$t.'<br/>playfair("'.$grr.'",'.$n.')';
		
		echo $h;
	}
	else
	{
		$cad=array();
		$cont=strlen($t);
		for($i=0;$i<$cont;$i++)
		{
			$car=substr($t,$i,1);
			array_push($cad,$car);
		}
		$reng=ceil($cont/$n);
		$resi=$cont%$n;
		$arreglo=array();
		for($i=0;$i<$reng;$i++)
			$arreglo[]=array();
		
		$contadorPal=0;
		$contadorReng=1;
		for($i=0;$i<$n;$i++)
		{
			if($contadorReng<=$resi)
			{
				for($y=0;$y<$reng;$y++)
				{
					$arreglo[$y][$i]=$cad[$contadorPal];
					$contadorPal++;
				}
				$contadorReng++;
			}
			else
			{
				for($y=0;$y<$reng-1;$y++)
				{
					$arreglo[$y][$i]=$cad[$contadorPal];
					$contadorPal++;
				}
				$contadorReng++;
			}
		}
		$respuesta="";
		for($i=0;$i<$n-1;$i++)
		{
			foreach($arreglo[$i] as $p)
			$respuesta=$respuesta.$p;
		}
		echo $respuesta;
	}	
?>