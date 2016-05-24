<!DOCTYPEhtml>
<html>
	<head>
		<meta charset="utf-8">
		<title>Proyecto Seguridad</title>
	</head>
	<style>
		h1{
			text-align:center;
		}
	</style>
	<body>
		<h1>Proyecto Seguridad</h1>
		<?php
			if(isset($_POST['nom'])&&isset($_POST['usu'])&&isset($_POST['con']))
			{
				if(preg_match('/^([\w]|[^( )]|[\.,! ]){6,20}$/',$_POST['usu'])&&preg_match('/^([\w]|[^( )]|[\.,! ]){6,30}$/',$_POST['con'])&&preg_match('/^[A-zññáéíóúÁÉÍÓÚ]+ ([A-zÑñáéíóúÁÉÍÓÚ]+ )+[A-zññáéíóúÁÉÍÓÚ]+$/',$_POST['nom']))
				{
					$enlace= mysqli_connect("localhost","root","","seguridad");
					if(!$enlace)
					{
						echo "No se pudo conectar".mysqli_connect_error();
					}
					else
					{
						htmlspecialchars($_POST['nom']);
						htmlspecialchars($_POST['usu']);
						htmlspecialchars($_POST['con']);
						mysqli_real_escape_string($enlace,$_POST['nom']);
						mysqli_real_escape_string($enlace,$_POST['usu']);
						mysqli_real_escape_string($enlace,$_POST['con']);
						$con=$_POST['con'];
						$ch=str_split($con);
						$cade="";
						for($x=0;$x<5;$x++)
						{
							$wi=rand(0,9);
							$cade=$cade.$wi;
						}
						
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
						$tildes = $enlace->query("SET NAMES 'utf8'");
						$consulta='SELECT * FROM usuarios WHERE nom_usuario="'.$_POST['usu'].'"';
						$res=mysqli_query($enlace, $consulta);
						$arre=array();
						while($row=mysqli_fetch_assoc($res))
						{
							foreach($row as $re)
							{
								$arre[]=$re;
							}
						}
						if(empty($arre))
						{
							$registro='INSERT INTO usuarios VALUES("'.$_POST['usu'].'","'.$cade.'","'.$_POST['nom'].'")';
							mysqli_query($enlace, $registro);
							mysqli_close($enlace);
						}
						else
							echo 'Ya existe este usuario<br/>';
					}
				}
				else
					echo 'Datos de registro inválidos<br/>';
			}
			SESSION_START();
			SESSION_UNSET();
			SESSION_DESTROY();
			$_SESSION['numeroe']=1;
		?>
		
		<a href="./inicio.php">Iniciar Sesión.</a><br/>
		<a href="./registro.html">Registrarse.</a>
	</body>
</html>