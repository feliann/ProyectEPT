<?php
include ("Conexion2.php");

$celular = $_POST["Telefono"];
$direc = $_POST["Direccion"];
$nombre = $_POST["Nombre"];
$apellido = $_POST["Apellido"];


if(isset($_POST["guardar"])) 
{
    $sqlgrabar = "INSERT INTO tb_data (Telefono,Direccion,Nombre,Apellido) values ('$celular','$direc','$nombre','$apellido')";

	if(mysqli_query($conn,$sqlgrabar))
	{
		echo "<script> alert('Información guardada con exito'); window.location='PaginaPrincipal.html' </script>";
	}else 
	{
		echo "Error: ".$sqlgrabar."<br>".mysql_error($conn);
	}
} 


