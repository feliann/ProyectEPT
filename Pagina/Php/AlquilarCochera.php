<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alquilar Cochera</title>
</head>
<body>
<header>

<h1>Alquilar Cochera</h1>   

<header>
<p>
    <h4>Hola, antes de poder alquilar una cochera necesitamos algunos datos tuyos</h4>
</p>
<form action="Alquilar.php" method = "POST"> 

<input class="controls" type="text" name="Nombre" id="Nombre" placeholder="Ingrese su Nombre">

<p></p>

<input class="controls" type="text" name="Apellido" id="Apellido" placeholder="Ingrese su Apellido">

<p></p>

<input class="controls" type="number" name="Telefono" id="Telefono" placeholder="Ingrese su Número de Telefono">

<p></p>

<input  type="text" name="Patente" id="Patente" placeholder="Ingrese su Patente">

<p></p>
<input type="submit" value= "Guardar" name="guardar" id="guardar" placeholder="Guardar">

<p>
</form>

<form action="./PaginaPrincipal.php">
<input type="submit" value= "Volver a la pagina principal" name="VolverPrincipal" id="volver" >
</form>
</p>



</body>
</html>