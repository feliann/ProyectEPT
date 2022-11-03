<?php
include ("Conexion.php");

$mail = $_POST["Correo"];
$contra = $_POST["Contrasena"];
$nombre = $_POST["Nombre"];
$apellido = $_POST["Apellido"];

if(isset($_POST["iniciarsesion"]))
{
   $query = mysqli_query($conn,"SELECT * FROM registro WHERE Nombre = '$nombre' AND Contrasena = '$contra'");
   $nr = mysqli_num_rows($query);

   if($nr==1)
   {
       echo "<script> alert('Bienvenido: $nombre'); window.location= 'PaginaPrincipal.html' </script>";
   }
   else
   {
    echo "<script> alert('Usuario inexistente'); window.location= 'iniciosesion.html' </script>";
   }
}
if(isset($_POST["registro"])) 
{
    $sqlgrabar = "INSERT INTO registro (Correo,Contrasena,Nombre,Apellido) values ('$mail','$contra','$nombre','$apellido')";

	if(mysqli_query($conn,$sqlgrabar))
	{
		echo "<script> alert('Usuario registrado con exito'); window.location='PaginaPrincipal.html' </script>";
	}else 
	{
		echo "Error: ".$sqlgrabar."<br>".mysql_error($conn);
	}
} 
