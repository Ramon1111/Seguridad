<!DOCTYPEhtml>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewpiort" content="width=device-width, initial-scale=1"/>
		<title>Seg 3</title>
	</head>
	<body>
		<?php
		SESSION_START();
		if(isset($_SESSION['numeroe']))
		{
			echo '<h1>Práctica 4</h1>
			<form method="GET" action="../programs/seg3.php">
				Cadena: <input type="text" maxlength="9" name="cad"/><br/>
				Llave: <input type="text" maxlength="9" name="llave"/><br/>
				<select name="cod">
					<option value="c">Cifrar</option>
					<option value="d">Decifrar</option>
				</select><br/>
				<input type="submit" value="enviar"/>
			</form>
			<a href="../inicio/ingreso.php">Regresar.</a>';
		}
		?>
	</body>
</html>