<?php
  $conexion=mysqli_connect("localhost","root","","prueba");
  $sql= "SELECT id,nombre FROM t_paises";
  $resultado=mysqli_query($conexion,$sql);

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="select2/select2.min.css"> 
    <script src="https://code.jquery.com/jquery-3.6.0.js"integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="crossorigin="anonymous"></script>
    <script src="select2/select2.min.js"></script>
  </head>
  <body style="background-color: #ECD4FF;">S
  <br>
      <h3 class="text-center">Control de buscador</h3>
      <br>
      <section style="text-align:center;">
        <select  id="contraladorBuscador" style="width: 50%;">S
          <?php while ($ver= mysqli_fetch_row($resultado)) {?>
          <option value="<?php echo $ver[0]?>">
            <?php echo $ver[1]?>
          </option>
          <?php }?>
        </select>
      </section>
  </body>
</html>
<script type="text/javascript">
  $(document).ready(function(){
    $('#contraladorBuscador').select2();
  });
</script>