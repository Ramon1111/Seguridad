<!DOCTYPEhtml>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewpiort" content="width=device-width, initial-scale=1"/>
		<title>Seg 5</title>
	</head>
	<body>
		<?php
		SESSION_START();
		if(isset($_SESSION['numeroe']))
		{
			echo '<form method="GET" action="seg5.php">
			Cadena: <input type="text" maxlength="80" name="cad"/><br/>
			Llave: <input type="text" maxlength="3" name="llave"/><br/>
			<select name="cod">
				<option value="c">Cifrar</option>
				<option value="d">Decifrar</option>
			</select><br/>
			<input type="submit" value="enviar"/>
		</form>
		<a href="./ingreso.php">Regresar.</a>';
		}
		?>
	</body>
</html>