<?php   
    $usuario = $_POST['usuario'];
    $contrasena  = $_POST['contrasena'];
	
	if($usuario == "admin" && $contrasena == "admin"){
		echo "admin";
	}
	else if($usuario == "paredan99" && $contrasena == "doginthepwo"){
		echo "user";
	}
	else
	{
		echo "Usuario o contraseña incorrecta.";
	}
?>