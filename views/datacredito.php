<?php


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Datacrédito</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="../views/css/datacredito.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/logoo.png" type="img/png">
    <script src="https://kit.fontawesome.com/5b973e91e5.js" crossorigin="anonymous"></script>
  </head>
  
  
<body>
<!-- HEADER DEL CONTACTO-->
  <header class="container-fluid d-flex justify-content-center top-fixed text-white" style="background-color: #005E56;">
    <p class="mb-0 p-2 fs-6">Contáctame 321-871-2282</p>
  </header>
  <?php 
  include "../models/conexion.php";
  ?>
  <!-- NAV DE LISTA-->
  <a name="arriba"></a>
  <nav class="navbar navbar-expand-lg bg-body-secondary p-0" id="Menu">
    <div class="container-fluid">
      <!-- Coopserp.com-->
      
      <!-- Botón que aparece al reducir pantalla--> 
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
      </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <!-- Foto Coopserp--> 
    <a class="navbar-brand" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample"><img src="img/CoopserpPH.png" alt="Coopserp.icono" width="150px" height="60px" id="data"></a>
      <ul class="navbar-nav me-auto mb-lg-0">        
         <!-- DataCredito-->      
         <li class="nav-item">
          <a class="nav-link" aria-current="page" href="./index.php" id="data">Menú</a>
        </li>
        <!-- DataCredito-->      
        <li class="nav-item">
          <a class="nav-link active text-primary text-opacity-50" aria-current="page" href="./datacredito.php" id="data">Datacrédito</a>
        </li>
        <!-- Anticipados-->  
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./anticipos.php" id="data">Anticipos</a>
        </li>
        <!-- Cuentas H-->  
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./cuentash.php" id="data">Cuentas H</a>
        </li>
         <!-- Cartera Castigada-->  
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./carteracastigada.php" id="data">Cartera Castigada</a>
        </li>
        <!-- Fondo de Garantia-->
        <li class="nav-item" >
          <a class="nav-link active" aria-current="page" href="./fgarantia.php" id="data">Fondo de Garantía</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- Despliege al tocar imagen-->
<div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasExampleLabel">Información</h5>
        <!-- Cerrar botón-->
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <!-- cuerpo del despliegue-->
        <div class="offcanvas-body">
          <div>
            <h1 class="p-3 fs-4 text-center">Coopserp Web</h1>
            <p class="p-3 fs-6 text-center">Es una página web la cual está distribuida en 6 interfaces,
              la cual cuenta con la página principal(índex) que es la que da vía a las demás como datacrédito,
              anticipos, cuentas H, carteras castigadas y fondo de garantía. Con el fin de filtrar
              información de la base de datos de la cooperativa. Toda esta información está sujeta a la
              ley de protección de datos.

            </p>
          </div>
        </div>
        <p class="copyright text-center">&copy;Coopserp Web</p>
</div>

<div class="container-fluid row p-5 mb-1">
<form class="col-4" method="POST">
  <h2 class="text-center p-3 text-secondary"><b>Datacrédito</b></h2>
  <?php 

  include "../controllers/registro_persona.php";
  ?>
  
  <!--Label1-->  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label fw-semibold">CÉDULA</label>
    <input type="text" class="form-control" name="cedula">
  </div>
  <!--Label2--> 
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label fw-semibold">NOMBRE COMPLETO</label>
    <input type="text" class="form-control" name="nombre">
  </div>
  <!--Label3-->
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label fw-semibold">SCORE</label>
    <input type="text" class="form-control" name="score">
  </div>
  <!--Label4-->
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label fw-semibold">CUENTA ASOCIADA</label>
    <input type="text" class="form-control" name="cuenta">
  </div>

  <!--Label5-->
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label fw-semibold">AGENCIA</label>
    <input type="text" class="form-control" name="agencia">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label fw-semibold">FECHA</label>
    <input type="date" class="form-control" name="archivo">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label fw-semibold">ADJUNTAR ARCHIVO PN</label>
    <input type="file" class="form-control" name="archivo">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label fw-semibold">ADJUNTAR ARCHIVO SINTESIS</label>
    <input type="file" class="form-control" name="archivo2">
  </div>
 
  <button  type="submit" class="btn btn-primary" name="btnregistrar" value="ok" style="background-color: #005E56;">Registrar</button>
 
</form>

<div class="col-8 p-4">
  <div class="mb-3">
    <form action="" method="post">
      <label for="campo" class="mb-2">Buscar:</label>
      <input type="text" name="campo" id="campo" class="form-control w-50 filtrar"></input>


    </form>  
  </div>
    
<table class="table">
  <thead class="" style="background-color: #005E56;">
    <tr class="text-white">
      
      <th scope="col">CÉDULA</th>
      <th scope="col">NOMBRE COMPLETO</th>
      <th scope="col">SCORE</th>
      <th scope="col">CUENTA ASOCIADA</th>
      <th scope="col">AGENCIA</th>
      <th scope="col">FECHA</th>
      <th scope="col">PN</th>
      <th scope="col">SINTESIS</th>
      <th></th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <?php 
  include "../controllers/modificar_persona.php";
  include "../controllers/eliminar_persona.php";
    ?>
  <tbody id="content">
    
  </tbody>
</table>


</div>

</div>

        
<!-- Pie de pagina -->
        <footer>
        <div class="container-fluid">
          <div class="row p-5 pb-2 text-white text-left" style="background-color: #005E56;">
  
            <div class="col-xs-12 col-md-6 col-lg-3">
              <p class="h3">&copy; Coopserp Web</p>
              <p class="text-secondaty text-left">Cali, Colombia</p>
              <img src="img/CoopserpPH.png" alt="Coopserp.png" width="250" height="90">
            </div>
            <div class="col-xs-12 col-md-6 col-lg-3 aling-elements">
              <p class="h5 mb-3 text-left"><b>Servicios</b></p>
              <div class="mb-2">
                <a href="#arriba" class="text-light text-decoration-none">Datacrédito</a>
              </div>
              <div class="mb-2">
                <a href="./anticipos.php" class="text-light text-decoration-none">Anticipos</a>
              </div>
              <div class="mb-2">
                <a href="./cuentash.php" class="text-light text-decoration-none">Cuentas H</a>
              </div>
              <div class="mb-2">
                <a href="./carteracastigada.php" class="text-light text-decoration-none">Cartera Castigada</a>
              </div>
              <div class="mb-2">
                <a href="./fgarantia.php" class="text-light text-decoration-none">Fondo de Garantía</a>
              </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-3">
              <p class="h5 mb-3 text-left"><b>Enlaces</b></p>
              <div class="mb-2">
                <a href="#" class="text-light text-decoration-none">Términos & Condiciones</a>
              </div>
              <div class="mb-2">
                <a href="#" class="text-light text-decoration-none">Política de Privacidad</a>
              </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-3">
              <p class="h5 mb-3 text-left"><b>Otros Contactos</b></p>
              <div class="mb-2">
                <a href="#" class="text-light text-decoration-none"><i class="bi bi-instagram"></i> Instagram</a>
              </div>
              <div class="mb-2">
                <a href="#" class="text-light text-decoration-none"><i class="bi bi-twitter"></i> Twitter</a>
              </div>
              <div class="mb-2">
                <a href="https://github.com/Santi0920/Coopserp" class="text-light text-decoration-none">Github</a>
              </div>
            </div>
            <p class="text-center text-white mt-4">Coopserp Web &copy; Todos Los derechos Reservados 2023 </p>
          </div>
        </div>
      </footer>
      
  <script>
    getData()
      document.getElementById("campo").addEventListener("keyup", getData)

      function getData(){
      let input = document.getElementById("campo").value
      let content = document.getElementById("content")
      let url = "http://localhost/dashboard/Proyecto/controllers/buscar_persona.php"
      let formaData = new FormData()
      formaData.append('campo', input)

      fetch(url, {
        method: "POST",
        body: formaData

      }).then(response => response.json())
      .then(data => {
        console.log({data})
        content.innerHTML = data
      }).catch(err => console.log({err}))
      }

      function eliminar(){
        var respuesta=confirm("Estas seguro que deseas eliminar este registro?")
        return respuesta
      }
    

      // obtenga todas las etiquetas de etiqueta en el documento
      var etiquetas = document.getElementsByTagName("label");

      // agregue un evento "clic" a cada etiqueta
      for (var i = 0; i < etiquetas.length; i++) {
        etiquetas[i].addEventListener("click", function() {
          // obtenga el valor del campo de entrada asociado
          var campoValor = document.getElementById(this.getAttribute("for")).value;
          // imprima el valor en la consola
          console.log(campoValor);
        });
      }
      


  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>