<?php
$mysqli= new mysqli("localhost","root","7856","datacredito");
$mysqli->set_charset("utf8");

if(mysqli_connect_error()){
    echo 'Conexión Fallida : ' , mysqli_connect_error();
    exit();
}

?>