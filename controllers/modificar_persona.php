<?php
include "../models/conexion.php";

if(!empty($_POST["editar"])){
  if(!empty($_POST["cedula"]) and !empty($_POST["nombre"]) and !empty($_POST["score"]) and !empty($_POST["cuenta"]) and !empty($_POST["agencia"])){
      
      $cedula=$_POST["cedula"];
      $nombre=$_POST["nombre"];
      $score=$_POST["score"];
      $cuenta=$_POST["cuenta"];
      $agencia=$_POST["agencia"];

      $stmt = $mysqli->prepare("UPDATE persona SET Nombre = ?, Score = ?, CuentaAsociada = ?, Agencia = ? WHERE Cedula = ?");
      $stmt->bind_param("sssss", $nombre, $score, $cuenta, $agencia, $cedula);
      $resultado = $stmt->execute();
  
      if ($resultado) {
        echo '<div class="alert alert-success id="alert-hide ">El usuario '.$nombre.' con identificación '.$cedula.' fue actualizado correctamente!</div>';
      } else {
        echo '<div class="alert alert-danger" id="alerta"">Error al actualizar el registro!"</div>';
      }
    }else{
      echo '<div class="alert alert-warning">Algunos de los campos estan vacios, error al actualizar el registro!</div>';

      }
    
  }
  
  

?>
