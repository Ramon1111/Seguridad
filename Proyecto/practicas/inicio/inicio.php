<!DOCTYPEhtml>
<html>
	<head>
		<meta charset="utf-8">
		<title>Proyecto Seguridad: Inicio de sesión.</title>
	</head>
	<style>
		h1{
			text-align:center;
		}
	</style>
	<body>
		<?php
			SESSION_START();
			SESSION_UNSET();
			SESSION_DESTROY();
			setcookie('entrada',10,time()+86400,'/');
		?>
		<h1>Inicio de sesión.</h1>
		<form method="POST" action="./ingreso.php">
			Nombre de usuario: <input type="text" maxlength="13" name="usui"/><br/>
			Contraseña: <input type="password" maxlength="30" name="coni"/><br/>
			<input type="submit"/><br/>
		</form>
		<a href="./main.php">Regresar</a>
	</body>
</html>