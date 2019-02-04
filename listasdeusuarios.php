<?php
$conexion = new mysqli("localhost", "root", "", "");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}
else {
$resultado = $conexion->query("SELECT * FROM usuarios");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
<link rel="stylesheet" href="https://w3schools.com/w3css/4/w3.css">

    <title></title>
        <link rel="stylesheet" href="estilos.css">
              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  </head>
  <body>
    <?php
        echo "<div class='w3-bar w3-black'>";
        echo "<a href='index.php' class='w3-bar-item w3-button'>Inicio</a>";
        echo "<a class='w3-bar-item'>Jugadores</a>";
        echo "</div>";
    ?>

    <div>
  <table>
    
    <tr>
      <td style="background-color:#498150; text-align:center;"><b>ID</b></td>
      <td style="background-color:#498150;text-align:center;"><b>Nombre</b></td>
      <td style="background-color:#498150; text-align:center;"><b>Apellidos</b></td>
      <td style="background-color:#498150;text-align:center;"><b>Edad</b></td>
      <td style="background-color:#498150; text-align:center;"><b>Curso</b></td>
      <td style="background-color:#498150;text-align:center;"><b>Puntuación</b></td>

    </tr>
  </body>
</html>
