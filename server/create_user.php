<?php
require_once "conexion.php";
if ($php_response["msg"]=="OK"){
	$u_exiten = mysqli_query($conexion, "SELECT * FROM usuarios");
	if (mysqli_num_rows($u_exiten) > 0 ){
		$php_response['obser']= "los usaurios ya existen ";
	
	}else{

		$email = "katte@gmail.com";
		$nombre="Katterin Galindo P";
		$password =md5("123456");
		$fecha_nacimiento = "1990/04/30";
		$crear = $conexion->prepare("INSERT INTO usuarios (email, nombre, password, fecha_nacimiento) VALUES (?,?,?,?)"); 
		$crear->bind_param("ssss", $email, $nombre, $password, $fecha_nacimiento);
		$crear->execute();
		
		$email = "katterin@gmail.com";
		$nombre="Katte G";
		$password =md5("987654");
		$fecha_nacimiento = "";
		$crear = $conexion->prepare("INSERT INTO usuarios (email, nombre, password, fecha_nacimiento) VALUES (?,?,?,?)"); 
		$crear->bind_param("ssss", $email, $nombre, $password, $fecha_nacimiento);
		$crear->execute();
		
		$email = "cami@gmail.com";
		$nombre="Camila";
		$password =md5("987654");
		$fecha_nacimiento = "";
		$crear = $conexion->prepare("INSERT INTO usuarios (email, nombre, password, fecha_nacimiento) VALUES (?,?,?,?)"); 
		$crear->bind_param("ssss", $email, $nombre, $password, $fecha_nacimiento);
		$crear->execute();

	}	
	$cumple = date('Y/m/d',strtotime("1982/07/08"));
}
