<?php   
    $usuario = $_POST['usuario'];
    $contrasena  = $_POST['contrasena'];
	
	if($usuario == "admin" && $contrasena == "admin"){
		echo "dekimashita";
	}
	else
	{
		echo "Usuario o contraseña incorrecta.";
	}
?>