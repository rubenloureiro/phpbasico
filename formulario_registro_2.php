<?php 
session_start();
    require_once 'errores_registro.php';
    // Estructura: campos del formulario
    $login = (isset($_SESSION['login']))?
            $_SESSION['login']:"";
    // $password No se Recupera, se reescribe siempre
    // $passwordR No se Recupera, se reescribe siempre
    $email = (isset($_SESSION['email']))?
            $_SESSION['email']:"";
    // Estructura para Errores
    $errLogin = (isset($_SESSION['errLogin']))?
            $_SESSION['errLogin']:FALSE;
    
    $errPassword = (isset($_SESSION['errPassword']))?
            $_SESSION['errPassword']:FALSE;
    
    $errPassword2 = (isset($_SESSION['errPassword2']))?
            $_SESSION['errPassword2']:FALSE;
    
    $errEmail = (isset($_SESSION['errEmail']))?
            $_SESSION['errEmail']:FALSE;
    
    $_SESSION['errLogin']=FALSE;
    $_SESSION['errPassword']=FALSE;
    $_SESSION['errPassword2']=FALSE;
    $_SESSION['errEmail']=FALSE;
    
    
    ?>
            <!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Registro</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div><b>Formulario de registro</b></div>
        <?php
            print_r($login); 
        ?>
        <form action="resultado_registro_2.php" method="GET">
            <div>Login:<br> <input type="text" name="login" value="<?php echo $login; ?>"> </div>    
            <div><?php 
                if($errLogin) echo MSG_ERR_LOGIN;
                ?></div>
            <div>Password:<br> <input type="password" name="password"/></div>
            <div><?php 
                if($errPassword) echo MSG_ERR_PASS;
            ?></div>
            <div>Repita contraseña:<br> <input type="password" name="password2"/></div>
            <div><?php 
                if($errPassword2) echo MSG_ERR_PASS2;
            ?></div>
            <div>Email:<br> <input type="text" name="email" value="<?php echo $email; ?>"/></div>
            <div><?php 
                if($errEmail) echo MSG_ERR_EMAIL;
            ?></div><br>
            <div><input type="submit" value="Registrar" /></div>
        </form>
    </body>
</html>