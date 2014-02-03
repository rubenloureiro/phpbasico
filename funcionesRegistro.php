<?php
/**
 * Constantes para longitud de login y password
 */
define ("longmax", "11"); 
define ("longmin", "3");

/**
 * Función para comprobar longitud
 */
function enRango ($cadena) {
   $resultado=false;
   if (strlen ($cadena)>=longmin && strlen($cadena)<longmax){
       $resultado=true;
   }
   return $resultado;
}

//Función para comprobar si una cadena es alfanumérica
function esAlfaNum ($cadena){
    $resultado=false;
    if (ctype_alnum($cadena)){
        $resultado=true;
    }
    return $resultado;
}

//Función para comprobar si dos cadenas son iguales
function sonIguales ($cadena1,$cadena2){
    $resultado=false;
    if ($cadena1==$cadena2) {
        $resultado=true;
    }
    return $resultado;
}

//Función para comprobar si un mail tiene la estructura correcta
function esEmail ($cadena){
    $resultado=false;
    if (filter_var($cadena, FILTER_VALIDATE_EMAIL)){
        $resultado=true;
    }
    return $resultado;
}

?>
