<?php require_once 'funcionesIMC.php';?>
<html>
    <head>
        <title>IMC</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div>Resultado del IMC</div>
        <?php 
        
        //*Entrada de datos
        $masa = $_REQUEST['masa'];
        $estatura = $_REQUEST['estatura']; //*Centímetros a metros
        $errores = array();
        if (!validarPeso($masa)) {
            $errores[] = MSG_ERR_PESO;
        }
         if (!validarEstatura($estatura)) {
            $errores[] = MSG_ERR_ESTATURA;
        }
        if (count ($errores)>0) {
            echo "Errorres<br>";
            foreach ($errores as $error) {
                echo $error. '</br>';
            }
        } else {

        //*Cálculo
        $IMC = calculoIMC ($masa, $estatura);
        $clasificacion = clasificacionIMC($IMC);
        
        //*Resultados IMC
        echo "Valor de IMC = ";
        echo $IMC;
        
        echo "</br>";
        echo "Clasificación = ".$clasificacion;
        }
        ?>
    </body>
</html>