<?php 
	$NAMEHOSTBD = 'localhost';
	$USERNAMEBD = 'root';
	$PASSWORDBD = '';
	$BDNAME     = 'construccion2';
	$conectar = mysqli_connect($NAMEHOSTBD, $USERNAMEBD, $PASSWORDBD, $BDNAME);
	if (!$conectar) {
			echo "No se pudo conectar a la BD";
	}else{
			echo '<script>alert("Conexion Exitosa a la BD")</script>';	
	}
?>