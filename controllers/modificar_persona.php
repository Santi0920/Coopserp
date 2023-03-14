<?php
include "../models/conexion.php";

if (isset($_GET['cedula'])) {
  $cedula = $_GET['cedula'];

  // Realizar la consulta SQL para obtener los datos del registro correspondiente
  $sql = "SELECT * FROM persona WHERE cedula = $cedula";
  $resultado = mysqli_query($mysqli, $sql);

  if ($resultado) {
    $row = mysqli_fetch_assoc($resultado);
    $nombre = $row['nombre'];
    $score = $row['score'];
    $cuenta = $row['cuenta'];
    $agencia = $row['agencia'];
    

    if (isset($_POST['submit'])) {
      $cedula = $_POST['cedula'];
      $nombre = $_POST['nombre'];
      $score = $_POST['score'];
      $cuenta = $_POST['cuenta'];
      $agencia = $_POST['agencia'];
      
    
      // Realizar la consulta SQL para actualizar los datos del registro correspondiente
      $sql = "UPDATE persona SET nombre = '$nombre', score = $score, cuenta = '$cuenta', agencia = '$agencia' WHERE cedula = $cedula";
      $resultado = mysqli_query($mysqli, $sql);
    
      if ($resultado) {
        echo "Registro actualizado correctamente!";
      } else {
        echo "Error al actualizar el registro: " . mysqli_error($mysqli);
      }
    }
  }
}

?>
