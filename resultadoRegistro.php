<?php
require_once 'funcionesRegistro.php';
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
    $resultadoValidacion = True;
    
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
        $resultadoValidacion = False;
    }

    if (!validarPass($password)) {
       $resultadoValidacion = False;
    }
    
    if (!LongPass($password, $password2)) {
       $resultadoValidacion = False;
    }
  
    if (!validarMail($email)) {
        $resultadoValidacion = False;
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
            if (validarDatosRegistro()) {
                echo "Datos correctos. Se puede registrar.";
            } else {
                echo "Error en los datos.";
            }
        ?>    
    </body>
</html>