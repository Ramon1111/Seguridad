<!DOCTYPEhtml>
<html>
	<head>
		<meta charset="utf-8">
		<title>Validación: CURP</title>
	</head>
	<body>
		<?php
		SESSION_START();
		if(isset($_SESSION['numeroe']))
		{
			echo '<h1>Validación de CURP.</h1>
			<form method="POST" action="curp.php">
				CURP: <input type="text" maxlength="18" name="num"/><br/>
				Año de nacimiento: <input type="text" maxlength="4" size="4" name="anio"/><br/>
				<input type="submit"/>
			</form>
			<a href="./ingreso.php">Regresar.</a>';
		}
		?>
	</body>
</html>