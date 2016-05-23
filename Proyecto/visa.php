<?php
	$num=$_POST['num'];
	echo $num.'<br/>';
	if(strlen($num)==16)
	{
		if(preg_match('/^4[0-9]{15}$/',$num))
		{
			$cont=0;
			for($i=1;$i<17;$i++)
			{
				$ccar=0;
				$e=substr($num,$i-1,1);
				if($i%2==1)
				{
						$ccar=2*$e;
				}
				else
					$ccar=$e;
				if($ccar>9)
					$ccar-=9;
				$cont-=$ccar;
			}
			if($cont%10==0&&$cont<150)
				echo 'Valor correcto, sí es una tarjeta VISA.';
			else
				echo '<br/>Valores incorrectos.';
		}
		else
			echo 'Valores incorrectos, sólo son números o no es una tarjeta VISA';
	}
	else
		echo 'Valores incorrectos, no son 16 números.';
?>