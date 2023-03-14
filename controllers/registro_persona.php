<?php

if(!empty($_POST["btnregistrar"])){
    if(!empty($_POST["cedula"]) and !empty($_POST["nombre"]) and !empty($_POST["score"]) and !empty($_POST["cuenta"]) and !empty($_POST["agencia"])){
        
        $cedula=$_POST["cedula"];
        $nombre=$_POST["nombre"];
        $score=$_POST["score"];
        $cuenta=$_POST["cuenta"];
        $agencia=$_POST["agencia"];

        $sql=$mysqli->query(" insert into persona(Cedula,Nombre,Score,CuentaAsociada,Agencia)values('$cedula','$nombre','$score','$cuenta','$agencia')");
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