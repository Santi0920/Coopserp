<?php
    function isNull($nombre, $user, $pass, $pass_con, $email){
        if(strlen(trim($nombre)) <1 || strlen(trim($user)) < 1 || strlen(trim($pass)) < 1 || strlen(trim($pass_con)) <1 || strlen(trim($email)) < 1)
        {
            return true;
        }else{
            return false;
        }
    }

    function isEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)){
                return true;
            }else{
                return false;
            }
    }

    function minMax($min, $max, $valor){
        if(strlen(trim($valor)) < $min)
        {
            return true;
        }
        else if(strlen(trim($valor)) > $max)
        {
            return true;
        }else{
            return false;
        }

    }



    function validaPassword($var1, $var2)
    {
        if (strcmp($var1, $var2) !== 0){
            return false;
        } else {
            return true;
        }
    }

    function usuarioExiste($usuario)
    {
        global $mysqli;

        $stmt = $mysqli->prepare("SELECT id FROM usuarios WHERE usuario = ? LIMIT 1");
        //Añade el parametro "s" seria string, luego se le pasa la variable
        $stmt->bind_param("s", $usuario);
        $stmt->execute();
        $stmt->store_result();
        $num = $stmt->num_rows;
        $stmt->close();

        if ($num > 0){
            return true;
        } else {
            return false;
        }
    }


    function emailExiste($email)
    {
        global $mysqli;

        $stmt = $mysqli->prepare("SELECT id FROM usuarios WHERE correo = ? LIMIT 1");
        //Añade el parametro "s" seria string, luego se le pasa la variable
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();
        $num = $stmt->num_rows;
        $stmt->close();

        if ($num > 0){
            return true;
        } else {
            return false;
        }
    }

    function generateToken()
    {
        $gen = md5(uniqid(mt_rand(), false));
        return $gen;
    }

    function hashPassword($password)
    {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        return $hash;
    }

    function registraUsuario($usuario, $pass_hash, $nombre, $email, $activo, $token, $rol)
    {
    global $mysqli;

        $stmt = $mysqli->prepare("INSERT INTO usuarios (usuario, password, nombre, correo, activacion, token, id_tipo) VALUES(?, ?, ?, ?, ?, ?, ?)");
        //Añade el parametro "s" seria string, luego se le pasa la variable
        $stmt->bind_param('ssssisi', $usuario, $pass_hash, $nombre, $email, $activo, $token, $rol);
        

        if ($stmt->execute()){
            return $mysqli->insert_id;
        } else {
            return 0;
        }
    }

    function enviarEmail($email, $nombre, $asunto, $cuerpo){
        require_once 'PHPMailer/PHPMailerAutoload.php';

        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tipo de seguridad';
        $mail->Host = 'smtp.hosting.com';
        $mail->Port = 'puerto';

        $mail->Username = "miemail@dominio.com";
        $mail->Password = 'password';

        $mail->setFrom('miemail@dominio.com', 'Sistema de Usuarios');
        $mail->addAddress($email, $nombre);

        $mail->Subject = $asunto;
        $mail->Bodey = $cuerpo;
        $mail->isHTML(true);

        if($mail->send())
        return true;
        else
        return false;
    }

    function resultBlock($errors){
        if(count($errors) > 0)
        {
            echo "<div id='error' class='alert alert-danger' role='alert'>
            <a href='#' onclick=\"showHide('error');\">[X]</a>
            <ul>";
            foreach($errors as $error)
            {
                echo "<li>".$error."</li>";
            }
            echo "</ul>";
            echo "</div>";
        }
    }