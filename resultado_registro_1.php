<?php
session_start();
require_once 'funciones_registro.php';
require_once 'errores_registro.php';

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
    $resultadoValidacion = array ('', '', '', '');
    
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
        $resultadoValidacion[0] = MSG_ERR_LOGIN;
    }

    if (!validarPass($password)) {
       $resultadoValidacion[1] = MSG_ERR_PASS; 
    }
    
    if (!longPass($password, $password2)) {
       $resultadoValidacion[2] = MSG_ERR_PASS2; 
    }
  
    if (!validarMail($email)) {
        $resultadoValidacion[3] = MSG_ERR_EMAIL;
    }
    
//Salida de datos
return $resultadoValidacion;
}
function hayErrores ($errores) {
    for ($i=0; $i<4; $i++) {
        if (strlen($errores[$i])>0){
            return TRUE;
        }
    }
    return FALSE;
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
            if (!hayErrores ($errores)) {
                echo "Datos correctos. Se puede registrar.";
            } else {
                $_SESSION['errores'] = $errores;
                $url = "formulario_Registro_1.php?".
                        $_SERVER['QUERY_STRING'];
                header('Location:'.$url);
            }
        ?>    
    </body>
</html>