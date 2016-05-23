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
			if(!isset($_POST['usui'])&&!isset($_POST['coni']))
			{
					$_SESSION['usuario']=$_POST['usui'];
					$_SESSION['contra']=$_POST['coni'];
			}
		?>
	</body>
</html>