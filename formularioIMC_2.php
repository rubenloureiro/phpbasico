<html>
    <head>
        <title>IMC</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div>Cálculo IMC</div>
        <form action="resultadoIMC.php" method="GET">
            <p>Introduzca su peso (Kg):</br><input type="text" name="masa"></p>
            <div>
                <?php 
                if (isset($_REQUEST ['error1'])) {
                    echo MSG_ERR_PESO;
                }
            ?>
            </div>
            <p>Introduzca su altura (cm):</br><input type="text" name="estatura"></p>
            <div>
                <?php 
                if (isset($_REQUEST ['error2'])) {
                    echo MSG_ERR_ESTATURA;
                }
            ?>
            </div>
            <input type="submit" name="calcular"/>
        </form>
    </body>
</html>