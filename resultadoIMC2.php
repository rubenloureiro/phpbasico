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
        $estatura = $_REQUEST['estatura']/100; //*Centímetros a metros
        $IMC= 0.0;
        $clasificacion= "";
        //*Fórmula
        $IMC = ($masa / ($estatura*$estatura));
        $clasificacion = clasificacionIMC($IMC);
        //*Resultados IMC
        
        echo "Valor de IMC = ";
        echo $IMC;
        
        echo "</br>";
        echo "Clasificación = ".$clasificacion;
       
        ?>
    </body>
</html>