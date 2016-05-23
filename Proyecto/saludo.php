<?php
	SESSION_START();
	if(isset($_SESSION['numeroe']))
	{
		$saludo=array('Hola Mundo','Saludos',"Hello, It's me",'Buenas tardes','Buenos dias','Hi','Buenas noches','Hola','¿Qué hay?','¿Cómo estas?');
		echo $saludo[rand(0,9)];
		echo '<br/>URL en github: <a href="https://github.com/Ramon1111/prueba-primer-repositorio/blob/master/saludo.php">https://github.com/Ramon1111/prueba-primer-repositorio/blob/master/saludo.php</a><br/>
		<a href="./ingreso.php">Regresar.</a>';
	}
?>