<?php 
// esto es para borras cosas de la BD
$id=$_GET['id'];
include ("Conexion.php");
// delete from alumnos where id=$id
$sql="delete from rentar where id='".$id."'";
$resultado=mysqli_query($conexion,$sql);

if($resultado) {
    echo "<script languaje='JavaScript'>
    alert('Los datos se eliminarion correctamente de la BD');
    location.assign('index.php')
    </script>";
}else{
echo "<script languaje='JavaScript'>
alert('Los datos NO se eliminarion de la BD');
location.assign('index.php')
</script>";
}

?>
// para confirmar si esta seguro de alquilar
<html>
    function confirmar(){
        return confirm ('Estas seguro de alquilar esta cochera?')
    }
</html>
