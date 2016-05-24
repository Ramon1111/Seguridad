<!DOCTYPEhtml>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewpiort" content="width=device-width, initial-scale=1"/>
		<title>Seg 9</title>
	</head>
	<body>
	<?php
		SESSION_START();
		if(isset($_SESSION['numeroe']))
		{
			echo '<h1>Práctica 9</h1>
		<form method="GET" action="../programs/seg9.php">
			Cadena: <input type="text" autofocus name="cad"/>
			<input type="submit" value="Perder"/>
		</form>
		<a href="../inicio/ingreso.php">Regresar.</a>';
		}
		?>
	</body>
</html>
