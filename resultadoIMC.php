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
        
        echo "Valor de IMC = ";
        echo $IMC;
        
        //*Resultados IMC
        if ($IMC <18.5){
            $clasificacion = "Bajo peso";
        }
            elseif ($IMC>18.5 &&  $IMC<24.99){
             $clasificacion = "Normal";
         }
            elseif ($IMC>=25 && $IMC<=29.99){
             $clasificacion = "Sobrepeso";
        }
            elseif ($IMC>=30){
             $clasificacion = "Obesidad";
        }

        echo "</br>";
        echo "Clasificación = ".$clasificacion;
       
        ?>
    </body>
</html>