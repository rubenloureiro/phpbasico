<?php
session_start();
require_once 'funcionesRegistro.php';
require_once 'erroresRegistro.php';

/**
 * Verifica que los datos recibidos por $_REQUEST son válidos
 * @return bool True si son válidos, False en caso contrario
 */
function validarDatosRegistro() {
    /**
     * validar login
     * validar password
     * validar password2 es igual a password
     * validar email
     */
    
    
    //Entrada de datos
    $resultadoValidacion = array();
    
    $login = (isset ($_REQUEST['login']))?
            $_REQUEST['login']:"";
    
    $password = (isset ($_REQUEST['password']))?
            $_REQUEST['password']:"";
    
    $password2 = (isset ($_REQUEST['password2']))?
            $_REQUEST['password2']:"";
    
    $email = (isset ($_REQUEST['email']))?
            $_REQUEST['email']:"";
    
    //Llamada a las funciones
    if (!validarLogin($login)) {
        $resultadoValidacion[] = MSG_ERR_LOGIN;
    }

    if (!validarPass($password)) {
       $resultadoValidacion[] = MSG_ERR_PASS; 
    }
    
    if (!longPass($password, $password2)) {
       $resultadoValidacion[] = MSG_ERR_PASS2; 
    }
  
    if (!validarMail($email)) {
        $resultadoValidacion[] = MSG_ERR_EMAIL;
    }
    
//Salida de datos
return $resultadoValidacion;
}

?>

<html>
    <head>
        <title>Resultado Registro</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div>Resultado Registro</div>
        <?php
            $errores = validarDatosRegistro();
            if (count ($errores)==0) {
                echo "Datos correctos. Se puede registrar.";
            } else {
                $_SESSION['errores'] = $errores;
                $url = "formularioRegistro1.php?".
                        $_SERVER['QUERY_STRING'];
                header('Location:'.$url);
            }
        ?>    
    </body>
</html>