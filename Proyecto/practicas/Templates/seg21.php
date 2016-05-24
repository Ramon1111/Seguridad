<!DOCTYPEhtml>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewpiort" content="width=device-width, initial-scale=1"/>
		<title>Seg 2</title>
	</head>
	<body>
		<?php
		SESSION_START();
		if(isset($_SESSION['numeroe']))
		{
			echo '<h1>Práctica 3</h1>
			<form method="GET" action="../programs/seg2.php">
			<input type="text" maxlength="9" name="num"/><br/>
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