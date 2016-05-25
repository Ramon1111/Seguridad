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
			<form method="POST" action="../Programs/curp.php">
				CURP: <input type="text" maxlength="18" name="num"/><br/>
				<input type="submit"/>
			</form>
			<a href="../inicio/ingreso.php">Regresar.</a>';
		}
		?>
	</body>
</html>