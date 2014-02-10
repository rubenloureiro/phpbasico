<?php
session_start();

    $login = (isset ($_REQUEST['login']))?
            $_REQUEST['login']:"";
    
    $email = (isset ($_REQUEST['email']))?
            $_REQUEST['email']:"";
    
        $errores = (isset ($_SESSION['errores']))?
            $_SESSION['errores']:array();
    
        unset($_SESSION['errores']);
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
        <div>
            <?php
            print_r($errores);
            ?>
        </div>
        <form action="resultado_registro_1.php" method="get">
            <div>Login: <br><input type="text" name="login" value="<?php echo $login; ?>"/></div>
            <div>Contraseña: <br><input type="password" name="password"/></div>
            <div>Repita contraseña: <br><input type="password" name="password2"/></div>
            <div>Email: <br><input type="text" name="email" value="<?php echo $email; ?>"/></div>
            <input type="submit" name="enviar" value="Registrar"/>
        </form>
    </body>
</html>