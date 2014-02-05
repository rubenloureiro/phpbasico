<?php
session_start();
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
        <form action="resultadoRegistro1.php" method="get">
            <p>Login: <br><input type="text" name="login"/></p>
            <p>Contraseña: <br><input type="password" name="password"/></p>
            <p>Repita contraseña: <br><input type="password" name="password2"/></p>
            <p>Email: <br><input type="text" name="email"/></p>
            <input type="submit" name="enviar" value="Registrar"/>
        </form>
    </body>
</html>