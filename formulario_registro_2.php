<?php
session_start();
//Estructura para campos del formulario
    $login = (isset ($_REQUEST['login']))?
            $_REQUEST['login']:"";
    
    $email = (isset ($_REQUEST['email']))?
            $_REQUEST['email']:"";
    
    //Estructura para errores
        $errLogin = (isset ($_REQUEST ['errLogin']))?
                $_REQUEST['errLogin']:FALSE;
        
        $errPassword = (isset ($_SESSION['errPassword']))?
            $_SESSION['errPassword']:FALSE;
        
        $errPassword2 = (isset ($_SESSION['errPassword2']))?
            $_SESSION['errPassword2']:FALSE;
        
        $errEmail = (isset ($_SESSION['errEMail']))?
            $_SESSION['errEMail']:FALSE;
    
        unset($_SESSION['errLogin']);
        unset($_SESSION['errPassword']);
        unset($_SESSION['errPassword2']);
        unset($_SESSION['errEmail']);
?>

<!DOCTYPE html>
<!--
Login (letras y números, longitud mínima y máxima)
Password (escribirlo dos veces, verificar que ambos sean iguales, letras y números, longitud mínima y máxima)
Email (obligatorio, estructura correcta)
-->
<html>
    <head>
        <title>Registro</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div><b>Formulario de Registro</b></div>

        <form action="resultado_registro_2.php" method="get">
            <div>Login: <br><input type="text" name="login" value="<?php echo $login; ?>"/></div>
            <div>
            <?php
            if ($errLogin) MSG_ERR_LOGIN;
            ?>
            </div>
            <div>Contraseña: <br><input type="password" name="password"/></div>
            <div>
            <?php
            if ($errPassword) MSG_ERR_PASS;
            ?>
            </div>
            <div>Repita contraseña: <br><input type="password" name="password2"/></div>
            <div>
            <?php
            if ($errPassword2) MSG_ERR_PASS2;
            ?>    
            </div>
            <div>Email: <br><input type="text" name="email" value="<?php echo $email; ?>"/></div>
            <div>
            <?php
            if ($errEmail) MSG_ERR_EMAIL;
            ?>
            </div>
            <input type="submit" name="enviar" value="Registrar"/>
        </form>
    </body>
</html>