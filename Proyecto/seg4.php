<?php
	$cad=$_GET['cad'];
	$llav=$_GET['llave'];
	$cod=$_GET['cod'];
	$len1=strlen($cad);
	$len2=strlen($llav);

	
	if($cod=='c')
	{
		/*if(strpos($cad,*" "*))
			echo 'si hay espacio e.e';
		*/
		if($cad==$llav)
		{
			$len=strlen($cad);
			$can=ceil($len/2);
			$nocan=$len-$can;
			$pal1=substr($cad,0,$can);
			$pal2=substr($cad,$can,$nocan);
			echo $pal2.$pal1;
		}
		else{
			$len=strlen($cad);
			$cad=str_split($cad);
			
			$hol="";
			for($x=$len;$x>0;$x--)
				$hol=$hol.array_pop($cad);
			echo $hol;
		}
	}
	else
	{
		if($cad==$llav)
		{
			$len=strlen($cad);
			$can=ceil($len/2);
			$nocan=$len-$can;
			$pal1=substr($cad,0,$nocan);
			$pal2=substr($cad,$nocan,$can);
			echo $pal2.$pal1;
		}
		else{
			$len=strlen($cad);
			$cad=str_split($cad);
			
			$hol="";
			for($x=$len;$x>0;$x--)
				$hol=$hol.array_pop($cad);
			echo $hol;
		}
	}
	
?>