<!DOCTYPEhtml>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewpiort" content="width=device-width, initial-scale=1"/>
		<title>Seg 7</title>
	</head>
	<body>
		<?php
		SESSION_START();
		if(isset($_SESSION['numeroe']))
		{
			echo '<h1>Práctica 7</h1>
		<form method="GET" action="seg7.php">
			Cadena: <input type="text" autofocus maxlength="80" name="cad"/><br/>
			<input type="submit" value="Perder"/>
		</form>
		<a href="./ingreso.php">Regresar.</a>';
		}
		?>
	</body>
</html>