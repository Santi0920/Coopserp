<?php
include "../models/conexion.php";
if(!empty($_POST["btnregistrar"])){
    if(!empty($_POST["cedula"]) and !empty($_POST["nombre"]) and !empty($_POST["score"]) and !empty($_POST["cuenta"]) and !empty($_POST["agencia"])){
        
        $cedula=$_POST["cedula"];
        $nombre=$_POST["nombre"];
        $score=$_POST["score"];
        $cuenta=$_POST["cuenta"];
        $agencia=$_POST["agencia"];

        $sql2 = "SELECT * FROM persona WHERE Cedula = '$cedula' ORDER BY UPPER(Nombre) ASC";
        $resultado = mysqli_query($mysqli, $sql2);
        if (mysqli_num_rows($resultado) > 0) {
            echo '<div class="alert alert-danger">Usuario ya existe! Error al Registrar!</div>';
        } else {
            $sql=$mysqli->query(" insert into persona(Cedula,Nombre,Score,CuentaAsociada,Agencia)values('$cedula','$nombre','$score','$cuenta','$agencia')");
            echo '<div class="alert alert-success">Persona registrada correctamente!</div>';    
        } 
        }else{
        echo '<div class="alert alert-warning">Algunos de los campos esta vacio</div>';

        }
        
       
}


?>