<?php

require '../controllers/funcs.php';
require '../modules/conexion.php';

$errors = array();

if(!empty($_POST)){
    $nombre = $mysqli->real_escape_string($_POST['nombre']);
    $usuario = $mysqli->real_escape_string($_POST['usuario']);
    $password = $mysqli->real_escape_string($_POST['password']);
    $con_password = $mysqli->real_escape_string($_POST['con_password']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $captcha = $mysqli->real_escape_string($_POST['g-recaptcha-response']);

    $activo = 0;
    $rol = 2;
    $secret = '6LdQVvskAAAAALhDVBdpyTPgKFkbj1-wILYQuszV';
    //si lleva ! es porque tomara el else
    if(!$captcha){
        $errors[] = "Por favor verifica el Captcha";
    }

    if(isNull($nombre, $usuario, $password, $con_password, $email))
    {
        $errors[] = "Debe llenar todos los campos";
    }

    if(!isEmail($email))
    {
        $errors[] = "Dirección de correo inválida";
    }

    if(!validaPassword($password, $con_password))
    {
        $errors[] = "Las contraseñas no coinciden";
    }
    
    if(usuarioExiste($usuario))
    {
        $errors[] = "El nombre de usuario $usuario ya existe";
    }

    if(emailExiste($email))
    {
        $errors[] = "El correo electronico $email ya existe";
    }

    if(count($errors) == 0)
    {
        $response = file_get_contents(
            "https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha");

        $arr = json_decode($response, TRUE); 

        if($arr['success'])
        {
            $pass_hash = hashPassword($password);
            $token = generateToken();

            $registro = registraUsuario($usuario, $pass_hash, $nombre, $email, $activo, $token, $rol);
            if($registro > 0)
            {
                $url = 'http://'.$_SERVER["SERVER_NAME"].'/dashboard/Proyecto/Views/activar.php?id='.$registro.'&val='.$token;
                $asunto = 'Activar Cuenta - Sistema de Usuarios';
                $cuerpo = "Estimado $nombre: <br /><br /> Para continuar con el proceso de registro, es indispensable de click en el siguiente link <a href='$url'>Activar Cuenta</a>";
        
            if(enviarEmail($email, $nombre, $asunto, $cuerpo))
            {
                echo "Para terminar el proceso de registro siga las instrucciones que le hemos enviado a la dirección de correco electronico $email";
                
                echo "<br><a href='login.php'>Iniciar Sesión</a>";
                exit;
            }
            else
            {
                $errors[] = "Error al enviar Email";
            }
            }else{
                $errors[] = "Error al Registrar";
            }   
        }
        }

            }else{
            
            $errors[] = "Error al comprobar Captcha";
            }
    
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iniciar Sesión | Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="index.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/logoo.png" type="img/png">
    <script src="https://kit.fontawesome.com/5b973e91e5.js" crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>
<body>
    <div class="container">
        <div style="margin-top:50px" class="mainbox col-md-6 col-md-offsert-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">Registrate</div>
                    <div style="float:right; font-size: 85%; position:relative; top: -10px"><a href="datacredito.php">Iniciar Sesión</a></div>

                    <div class="panel-body">
                            <form class="form-horizontal" role="form" action="<?php $_SERVER["PHP_SELF"] ?>" method="POST" autocomplete="off">
                                <div style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>

                            <div class="form-group">
                                    <label for="nombre" class="col-md-3 control-label">Nombre:</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="<?php if(isset($nombre)) echo $nombre; ?>" required>
                                    </div>
                            </div>

                            <div class="form-group">
                                    <label for="usuario" class="col-md-3 control-label">Usuario</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="usuario" placeholder="Usuario" value="<?php if(isset($usuario)) echo $usuario; ?>" required>
                                    </div>
                            </div>

                            <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Contraseña</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password" placeholder="Contraseña" required>
                                    </div>
                            </div>

                            <div class="form-group">
                                    <label for="con_password" class="col-md-3 control-label">Confirmar Contraseña</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="con_password" placeholder="Confirmar Contraseña" required>
                                    </div>
                            </div>

                            <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email" placeholder="Email" value="<?php if(isset($email)) echo $email; ?>" required>
                                    </div>
                            </div>

                            <div class="form-group">
                                    <label for="captcha" class="col-md-3 control-label"></label>
                                    <div class="g-recaptcha col-md-9 mb-4" data-sitekey="6LdQVvskAAAAALhDVBdpyTPgKFkbj1-wILYQuszV"></div>
                            </div>

                                <div class="col-md-offset-3 col-md-9">
                                    <button type="submit" class="btn btn-info mb-4<" value="ok">
                                    Registrar</button>
                                </div>
                            </div>
                            </form> 
                        <?php echo resultBlock($errors); ?> 
                </div>
            </div>   
        </div>
    </div>                       
<script></script>
</body>
</html>
