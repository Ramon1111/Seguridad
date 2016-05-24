<!DOCTYPEhtml>
<html>
	<head>
		<meta charset="utf-8">
		<title>Validación: VISA</title>
	</head>
	<body>
		<?php
			SESSION_START();
			if(isset($_SESSION['numeroe']))
			{
				echo '<h1>Validación de VISA.</h1>
				<form method="POST" action="../programs/visa.php">
					Número de la tarjeta: <input type="text" maxlength="16" name="num"/>
					<input type="submit"/>
				</form>
				<a href="../inicio/ingreso.php">Regresar.</a>';
			}
		?>
	</body>
</html>