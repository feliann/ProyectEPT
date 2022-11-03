<?php
require 'conectando.php';
if(isset($_POST["delete"]) && isset($_POST["deleteId"])){
  foreach($_POST["deleteId"] as $deleteId){
    $delete = "DELETE FROM tb_data WHERE Telefono = $deleteId";
    mysqli_query($conn, $delete);
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Alquilar</title>
  </head>
  <body>
    <table border = 1 cellpadding = 8 cellspacing = 0>
      <form class="" action="" method="post">
        <tr>
          <td> <button type="submit" name="delete">Alquilar</button> </td>
          <td>#</td>
          <td>Nombre</td>
          <td>Apellido</td>
          <td>Telefono</td>
          <td>Direccion</td>
        </tr>
        <?php
        $rows = mysqli_query($conn, "SELECT * FROM tb_data");
        $i = 1;
        foreach($rows as $row) :
        ?>
        <tr>
          <td align = center> <input type="checkbox" name="deleteId[]" value="<?php echo $row['Telefono']; ?>"> </td>
          <td><?php echo $i++; ?></td>
          <td><?php echo $row["Nombre"]; ?></td>
          <td><?php echo $row["Apellido"]; ?></td>
          <td><?php echo $row["Telefono"]; ?></td>
          <td><?php echo $row["Direccion"]; ?></td>
        </tr>
        <?php endforeach; ?>
      </form>
    </table>
  </body>
</html>