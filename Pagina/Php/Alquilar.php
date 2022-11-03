<?php
include ("Conexion.php");

$celular = $_POST["Telefono"];
$paten = $_POST["Patente"];
$nombre = $_POST["Nombre"];
$apellido = $_POST["Apellido"];


if(isset($_POST["guardar"])) 
{
    $sqlgrabar = "INSERT INTO alquilar (Telefono,Patente,Nombre,Apellido) values ('$celular','$paten','$nombre','$apellido')";

	if(mysqli_query($conn,$sqlgrabar))
	{
		echo "<script> alert('Información guardada con exito'); window.location='AlquilarCocheraFinal.html' </script>";
	}else 
	{
		echo "Error: ".$sqlgrabar."<br>".mysql_error($conn);
	}
} 
