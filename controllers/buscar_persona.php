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
$where ORDER BY Nombre ASC";

$resultado = $mysqli->query($sql);
$num_rows = $resultado->num_rows;

$html = '';

if($num_rows > 0){
while($fila = $resultado->fetch_assoc()){
    $html .= '<tr>';
    $html .= '<td class="text-uppercase">'.$fila['Cedula'].'</td>';
    $html .= '<td class="text-uppercase">'.$fila['Nombre'].'</td>';
    $html .= '<td class="text-uppercase">'.$fila['Score'].'</td>';
    $html .= '<td class="text-uppercase">'.$fila['CuentaAsociada'].'</td>';
    $html .= '<td class="text-uppercase">'.$fila['Agencia'].'</td>';
    $html .= '<td>
    <form action="datacredito.php" method="post">
    
    <a href="datacredito.php" type="button" class="btn btn-small btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal"><input type="hidden" name="cedula" value="<?php echo $cedula; ?>"><i class="fa-regular fa-pen-to-square">
    </i></a>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
            <button type="button" data-bs-dismiss="modal" class="btn-close p-3" aria-label="Close"></button>
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
                    
                    <h1 class="modal-title text-center" id="modificar">MODIFICAR</h1>

                 </div>
                <hr>

                <div class="modal-body">
    </form>
    
            <form class="text-center" id="subir" method="POST">
  
            <!--Label1-->  
            <div class="mb-3">
                <label for="exampleInputEmail1" id="izquierda" class="form-label fw-bold">CÉDULA</label>
                <input type="text" class="form-control" name="cedula">
            </div>
            <!--Label2--> 
            <div class="mb-3">
                <label for="exampleInputEmail1" id="izquierda3" class="form-label fw-bold">NOMBRE COMPLETO</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <!--Label3-->
            <div class="mb-3">
                <label for="exampleInputEmail1"  id="izquierda" class="form-label fw-bold">SCORE</label>
                <input type="text" class="form-control" name="score">
            </div>
            <!--Label4-->
            <div class="mb-3 ">
                <label for="exampleInputEmail1" id="izquierda2" class="form-label fw-bold">CUENTA ASOCIADA</label>
                <input type="text" class="form-control" name="cuenta">
            </div>

            <!--Label5-->
            <div class="mb-3">
                <label for="exampleInputEmail1" id="izquierda" class="form-label fw-bold">AGENCIA</label>
                <input type="text" class="form-control" name="agencia">
            </div>
                </div>
            <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary" style="background-color: #005E56;">Guardar</button>
             </div>
            </div>
        </div>
    </div>
    
    </td>';
    $html .= '<td><a href="" class=" btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a></td>';
    $html .= '<tr>';
}
    }else{
    $html .= '<tr>';
    $html .= '<td colspan="5">Sin Resultados</td>';
    $html .= '</tr>';
    }

echo json_encode($html, JSON_UNESCAPED_UNICODE);

