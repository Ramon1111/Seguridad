<!DOCTYPEhtml>
<html>
	<head>
		<meta charset="utf-8">
		<title>Proyecto Seguridad: Ingreso.</title>
	</head>
	<style>
		h1{
			text-align:center;
		}
	</style>
	<body>
		<?php
			SESSION_START();
			if(!isset($_SESSION['usuario'])&&!isset($_SESSION['contra'])&&isset($_POST['usui'])&&isset($_POST['coni'])&&isset($_COOKIE['entrada']))
			{
				setcookie('entrada','',time()-86400,'/');
				$_SESSION['usuario']=$_POST['usui'];
				$_SESSION['contra']=$_POST['coni'];
				$con=$_POST['coni'];
				$ch=str_split($con);
				$cade="";
				
				for($x=0;$x<strlen($con);$x++)
				{
					$wi=(ord($ch[$x])>>1)-4;
					$cade=$cade.chr($wi);
				}
			
				$cad=array();
				$arreglo=array();
				$cont=strlen($con);
				for($i=0;$i<$cont;$i++)
				{
					$car=substr($con,$i,1);
					array_push($cad,$car);
				}
				$mul=ceil($cont/5);
				$contadorpal=0;
				for($x=0;$x<$mul;$x++)
				{
					$eje=array();
					for($y=0;$y<5;$y++)
					{
						if($contadorpal<$cont)
							array_push($eje,$cad[$y]);
						else
							array_push($eje,'');
						$contadorpal++;
					}
					array_push($arreglo,$eje);
					for($g=0;$g<5;$g++)
						if($cad!='\0')
							array_shift($cad);
				}
				$grr=array();
				for($y=0;$y<5;$y++)
					for($x=0;$x<$mul;$x++)
						array_push($grr,$arreglo[$x][$y]);
				$grr=implode("",$grr);

				$h='Texto: '.$con.'<br/>playfair("'.$grr.'",5)';
				$cant=ceil(strlen($grr)/2);
				$cade=$cade.substr($grr,0,$cant);
				$enlace= mysqli_connect("localhost","root","","seguridad");
				htmlspecialchars($_POST['usui']);
				htmlspecialchars($_POST['coni']);
				mysqli_real_escape_string($enlace,$_POST['usui']);
				mysqli_real_escape_string($enlace,$_POST['coni']);
				if(!$enlace)
				{
					echo "No se pudo conectar".mysqli_connect_error();
				}
				else
				{
				$tildes = $enlace->query("SET NAMES 'utf8'");
				$consulta='SELECT * FROM usuarios WHERE nom_usuario="'.$_SESSION['usuario'].'"';
				$res=mysqli_query($enlace, $consulta);
				$arre=array();
				while($row=mysqli_fetch_assoc($res))
				{
					foreach($row as $re)
					{
						$arre[]=$re;
					}
				}
				if(substr($arre[1],5)==$cade)
					$_SESSION['numeroe']=1;
				mysqli_close($enlace);
				}
			}
				if(!isset($arre)&&!isset($_SESSION['numeroe']))
					$arre=array();
				if(empty($arre)&&!isset($_SESSION['numeroe']))
				{
					echo 'Usuario incorrecto.';
				}
				if(isset($_SESSION['numeroe']))
				{
					echo '<h1>Hola '.$_SESSION['usuario'].'</h1>
					<ol>
						<li><a href="../Templates/visa1.php">Práctica: validación de VISA</a></li>
						<li><a href="../Templates/curp1.php">Práctica: validación de CURP</a></li>
						<li><a href="../Templates/saludo.php">Práctica 1: saludo en github</a></li>
						<li><a href="../Templates/seg11.php">Práctica 2</a></li>
						<li><a href="../Templates/seg21.php">Práctica 3</a></li>
						<li><a href="../Templates/seg31.php">Práctica 4</a></li>
						<li><a href="../Templates/seg41.php">Práctica 5</a></li>
						<li><a href="../Templates/seg51.php">Práctica 6</a></li>
						<li><a href="../Templates/seg71.php">Práctica 7</a></li>
						<li><a href="../Templates/seg81.php">Práctica 8</a></li>
						<li><a href="../Templates/seg91.php">Práctica 9</a></li>
					</ol>
					<a href="./main.php">Cerrar Sesión</a>';
				}
				else
					echo 'Inicie sesión';
				
				
				
			
		?>
	</body>
</html>