<?php
include "../models/conexion.php";

if(isset($_REQUEST['e'])){

    $e=$_REQUEST['e'];
    mysqli_query($mysqli, "DELETE FROM persona WHERE cedula=$e");

      if ($e) {
        echo '<div class="alert alert-success">Registro eliminado correctamente!</div>';

      } else {
        echo '<div class="alert alert-danger">Error al eliminar el registro!"</div>';
      }
    
    }


?>