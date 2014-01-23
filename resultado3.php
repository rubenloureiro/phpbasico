<?php require_once 'validar.php';?>;
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div>Formulario con "validar.php"</div>
        <?php 
            //Entrada datos    
            $nombre = $_REQUEST['nombre'];
            $edad =  $_REQUEST ["edad"];
            
            //Validar datos
            $error = false;
            $mensaje_error = "ERROR:";
            
            //Validar nombre
            $nombre = limpiarTexto($nombre);
            if (!validarNombreEstricto ($nombre)) {
                $error = true;
                $mensaje_error .= "Nombre obligatorio<br>";
            }
            //Validar edad
            if (!validarEdad ($edad)) {
                $error = true;
                $mensaje_error .= "Edad debe ser un número...<br>";
            }
            //Cálculo y salida
            if (!$error) {
                if ($edad>=18) {
                    echo $nombre." es mayor de edad.";
                } else {
                    echo $nombre." es menor de edad. ";
                }
            } else {
                //Si hay error
                echo $mensaje_error;
                echo "<a href='javascript:history.go(-1);'>Volver al formulario</a>";
            }
        ?>
    </body>
</html>