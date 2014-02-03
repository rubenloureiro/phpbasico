<?php require_once 'funcionesRegistro.php'; ?>
<html>
    <head>
    </head>
    <body>
        <?php
        //Entrada de datos
        $salida= $_REQUEST;
        $login= $_REQUEST['login'];
        $password= $_REQUEST['password'];
        $password2= $_REQUEST['password2'];
        $email= $_REQUEST['email'];   
        $error="";

        //Validar nombre (longitud)
        if (!enRango($login)){
            $error.="<li> El nombre es demasiado corto o demasiado largo (3-10) o no existe.</li>";
        }
        
        //Validar nombre (letras y números)
        if (!esAlfaNum($login)){
            $error.="<li> El nombre debe estar compuesto por caracteres alfanumericos.</li>";
        }
        
        //Validar contraseña (longitud)
        if (!enRango($password)){
            $error.="<li> La contrasena es demasiado corta o demasiado larga (3-10) o no existe.</li>";
        }
        
        //Validar contraseña (letras y números)
        if (!esAlfaNum($password)) {
            $error.="<li> La contrasena debe estar compuesta por caracteres alfanumericos.</li>";
        }
        
        //Validar contraseñas (comparación)
        if (!sonIguales($password,$password2)){
            $error.="<li> Las contrasenas deben ser iguales.</li>";
        }
        
        //Validar correo
        if (isset($email)&&!esEmail($email)){
            $error.="<li> El correo electronico debe tener estructura de email.</li>";
            
        }
        
        //Salida de datos
        if ($error==""){
            echo "<ul>";
            foreach ($salida as $valor) {
                echo "<li>".$valor."</li>";
            }
            echo "</ul>"; 
        } else {
            echo "<ul>";
            echo $error;
            echo "</ul>";
        }
        ?>
    </body>
</html>
