<?php
  $conexion=mysqli_connect("localhost","root","","pruebas");
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mostrar datos</title>
</head>
<body>
  <br>
    <table border="1">
      <tr>
        <td>id</td>
        <td>nombre</td>
        <td>apellido</td>
        <td>email</td>
        <td>telefono</td>
      </tr>

      <?php
      $sql= "SELECT * FROM t_persona";
      $resultado=mysqli_query($conexion,$sql);
      while ($mostrar=mysqli_fetch_array($resultado)){
      ?>

      <tr>
        <td><?php echo $mostrar['id']?></td>
        <td><?php echo $mostrar['nombre']?></td>
        <td><?php echo $mostrar['apellido']?></td>
        <td><?php echo $mostrar['email']?></td>
        <td><?php echo $mostrar['telefono']?></td>
      </tr>

      <?php
      }
      ?>
    </table>

</body>
</html>