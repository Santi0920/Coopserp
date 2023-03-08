<?php

if(!empty($_POST["btnregistrar"])){
    if(!empty($_POST["nombre"]) and !empty($_POST["apellidos"]) and !empty($_POST["cedula"]) and !empty($_POST["fecha"]) and !empty($_POST["correo"])){
        
        $nombre=$_POST["nombre"];
        $apellidos=$_POST["apellidos"];
        $cedula=$_POST["cedula"];
        $fecha=$_POST["fecha"];
        $correo=$_POST["correo"];

        $sql=$conexion->query(" insert into empleado(Nombre,Apellidos,Cedula,Fecha_nac,Correo)values('$nombre','$apellidos','$cedula','$fecha','$correo')");
        if ($sql==1) {
            echo '<div class="alert alert-success">Persona registrado correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">Error al registrar persona</div>';
        }
        
    }else{
        echo '<div class="alert alert-warning">Algunos de los campos esta vacio</div>';

    }
}


?>