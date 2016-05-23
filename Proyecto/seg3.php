<?php
	$cad=$_GET['cad'];
	$llav=$_GET['llave'];
	$cod=$_GET['cod'];
	$len1=strlen($cad);
	$len2=strlen($llav);
	if($len1==$len2)
	{
		$cad=str_split($cad);
		$llav=str_split($llav);
		echo print_r($cad).'<br/>'.$len1.'<br/>';
		print_r($llav);
		
		if($cod=='c')
		{
			$hey="";
			for($x=0;$x<$len1;$x++)
				$hey=$hey.$cad[$x] xor $llav[$x];
			echo '<br/>'.$hey;
		}
		
		
		
		
	}
	else
	{
		echo 'No estan bien';
	}
?>