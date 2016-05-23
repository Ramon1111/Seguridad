<!DOCTYPEhtml>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewpiort" content="width=device-width, initial-scale=1"/>
		<title>Segurity 1</title>
	</head>
	<body>
		<?php
		SESSION_START();
		if(isset($_SESSION['numeroe']))
		{
			echo 'Texto: <input type="text" maxlength="50" size="40" id="text"/><br/>
			Número: <input type="text" maxlength="40" size="40" id="num"/><br/>
			<select id="cod">
				<option value="c">Codificar</option>
				<option value="d">Dedificar</option>
			</select><br/>
			<button type="button" id="but">Enviar</button>
			<div id="res"></div>
			<a href="./ingreso.php">Regresar.</a>';
		}
		?>
			<script type="text/javascript" src="./jquery.js"></script>
			<script type="text/javascript" src="./seg1.js"></script>
		
	</body>
</html>