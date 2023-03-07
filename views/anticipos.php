<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Anticipos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="index.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/logoo.png" type="img/png">
  </head>
  
  
<body>
<!-- HEADER DEL CONTACTO-->
  <header class="container-fluid d-flex justify-content-center top-fixed text-white" style="background-color: #005E56;">
    <p class="mb-0 p-2 fs-6">Contáctame 321-871-2282</p>
  </header>
  
  <!-- NAV DE LISTA-->
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
          <a class="nav-link active" aria-current="page" href="index.php" id="data">Menú</a>
        </li>
        <!-- Anticipados-->  
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#" id="data">Anticipos</a>
        </li>
        <!-- Cuentas H-->  
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#" id="data">Cuentas H</a>
        </li>
         <!-- Cartera Castigada-->  
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#" id="data">Cartera Castigada</a>
        </li>
        <!-- Fondo de Garantia-->
        <li class="nav-item" >
          <a class="nav-link active" aria-current="page" href="#" id="data">Fondo de Garantía</a>
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
                <a href="./datacredito.php" class="text-light text-decoration-none">Datacrédito</a>
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
                <a href="#" class="text-light text-decoration-none"><i class="bi bi-github"></i> Github</a>
              </div>
            </div>
            <p class="text-center text-white mt-4">Coopserp Web &copy; Todos Los derechos Reservados 2023 </p>
          </div>
        </div>
      </footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>