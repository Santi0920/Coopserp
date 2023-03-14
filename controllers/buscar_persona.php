<?php

require "../models/conexion.php";

$columns = ['Cedula', 'Nombre', 'Score', 'CuentaAsociada', 'Agencia'];
$table = "persona";

$campo = isset($_POST['campo']) ? $mysqli->real_escape_string($_POST['campo']) : null;

$where = '';

if($campo != null){
    $where = "WHERE (";

    $cont = count($columns);
    for($i = 0; $i < $cont; $i++){
        $where .= $columns[$i] . " LIKE '%" . $campo . "%' OR ";

    }
    //Enlazar un apartado con otro caracter
    $where = substr_replace($where, "", -3);
    $where .= ")";
}

$sql = "SELECT " . implode(", ", $columns) . " FROM $table
$where ";

$resultado = $mysqli->query($sql);
$num_rows = $resultado->num_rows;

$html = '';

if($num_rows > 0){
while($fila = $resultado->fetch_assoc()){
    $html .= '<tr>';
    $html .= '<td>'.$fila['Cedula'].'</td>';
    $html .= '<td>'.$fila['Nombre'].'</td>';
    $html .= '<td>'.$fila['Score'].'</td>';
    $html .= '<td>'.$fila['CuentaAsociada'].'</td>';
    $html .= '<td>'.$fila['Agencia'].'</td>';
    $html .= '<td><a href="" class="btn btn-small btn-warning"><i class="fa-regular fa-pen-to-square"></i></a></td>';
    $html .= '<td><a href="" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a></td>';
    $html .= '<tr>';
}
    }else{
    $html .= '<tr>';
    $html .= '<td colspan="5">Sin Resultados</td>';
    $html .= '</tr>';
    }

echo json_encode($html, JSON_UNESCAPED_UNICODE);

